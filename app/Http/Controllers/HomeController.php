<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Irigasi;
use App\Koordinat;
use Illuminate\Support\Facades\Input;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function detail($id)
    {
        $irigasi=Irigasi::find($id);
        $koor = Koordinat::where('idIrigasi',"=",$id)->get(); 
        //dd($koor);
        return view('detail')->with(['irigasi'=>$irigasi, 'koor'=>$koor]);
    }

    public function admin()
    {
      $jlhPusat=Irigasi::where("kewenangan",'=',1)->count();
      $jlhProv=Irigasi::where("kewenangan",'=',2)->count();
      $jlhKab=Irigasi::where("kewenangan",'=',3)->count();
      
        return view('admin')->with(['jlhProv'=>$jlhProv,'jlhPusat'=>$jlhPusat,'jlhKab'=>$jlhKab]);
    }
    public function edit($id)
    {
      
        $irigasi=Irigasi::find($id);
       // dd($irigasi);

        return view('editData')->with('irigasi', $irigasi);
    }

    public function data_provinsi($id)
    {
        $irgs=Irigasi::where("kewenangan",'=',$id)->get();
        
       //dd($jlh);
         return view('data_prov')->with(['irgs'=> $irgs,'id'=>$id]);
    }

    public function tambah_data($id)
    {
        //$irigasi=Irigasi::all($id);
     //   $id = $irigasi->id;
       // dd($id);

       // return view('editData')->with('irigasi', $irigasi);
        return view('input_data')->with('id',$id);
    }
    public function hapus($id)
    {
         $irigasi=Irigasi::find($id);
         $index=$irigasi->kewenangan;
         $irigasi->delete();
         //dd($index);
         if($index=="1"){
        return redirect('data/1');
    }
      else if($index=="2"){ 
        return redirect('data/2');}
      else if($index=='3'){
       return redirect('data/3');}
    }
    public function simpanDi(Request $request)
    {
      $this->validate($request,[
        'nama'=>'required',
        'kewenangan'=>'required',
        'Kecamatan'=>'required',
        'skemaJaringan'=>'mimes:doc,docx,pdf',
        'petaSituasi'=>'mimes:doc,docx,pdf',
        /*'email'=>'required',
        'password' => 'min:6|confirmed',*/
        //'password' => 'min:6|confirmed',
        ]);
      $irigasi= new Irigasi;
      $irigasi->nama=$request->nama;
      $irigasi->kewenangan=$request->kewenangan;
      $irigasi->Kecamatan=$request->Kecamatan;
      $irigasi->jlhBendung=$request->jlhBendung;
      $irigasi->luasArea=$request->luasArea;
      $irigasi->panjangSaluran=$request->panjangSaluran;
      $irigasi->saluranPrimer=$request->saluranPrimer;
      $irigasi->jnsSaluranPrimer=$request->jnsSaluranPrimer;
      $irigasi->saluranSkunder=$request->saluranSkunder;
      $irigasi->jnsSaluranSkunder=$request->jnsSaluranSkunder;
      $irigasi->debitAir=$request->debitAir;

      if (Input::hasFile('skemaJaringan') and Input::hasFile('petaSituasi')) {
        $destinationPath = '../public/assets/file'; 

        $extension1 = Input::file('skemaJaringan')->getClientOriginalExtension(); 
        $fileName1 = rand(11111,99999).'-' .Input::file('skemaJaringan')->getClientOriginalName().'.'.$extension1; 

        $extension2 = Input::file('petaSituasi')->getClientOriginalExtension(); 
        $fileName2 = rand(11111,99999).'-'.Input::file('petaSituasi')->getClientOriginalName().'.'.$extension2; 
    
        Input::file('skemaJaringan')->move($destinationPath, $fileName1); 
        Input::file('petaSituasi')->move($destinationPath, $fileName2); 
        $irigasi->skemaJaringan=$fileName1;
        $irigasi->petaSituasi=$fileName2;
      }
      //$irigasi=Irigasi::find($id);
      
      
        $irigasi->save();
        $idn = $irigasi->id;
        return redirect("detail/view/".$idn);
     }
  public function editDi(Request $request,$id)
    {
      $this->validate($request,[
        'nama'=>'required',/*
        'nip'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password' => 'min:6|confirmed',*/
        //'password' => 'min:6|confirmed',
        ]);
      $irigasi= Irigasi::find($id);
      $irigasi->nama=$request->nama;
      $irigasi->kewenangan=$request->kewenangan;
      $irigasi->Kecamatan=$request->Kecamatan;
      $irigasi->jlhBendung=$request->jlhBendung;
      $irigasi->luasArea=$request->luasArea;
      $irigasi->panjangSaluran=$request->panjangSaluran;
      $irigasi->saluranPrimer=$request->saluranPrimer;
      $irigasi->jnsSaluranPrimer=$request->jnsSaluranPrimer;
      $irigasi->saluranSkunder=$request->saluranSkunder;
      $irigasi->jnsSaluranSkunder=$request->jnsSaluranSkunder;
      $irigasi->debitAir=$request->debitAir;
      $destinationPath = '../public/assets/file'; 
      if (Input::hasFile('skemaJaringan')) {
        $extension1 = Input::file('skemaJaringan')->getClientOriginalExtension(); 
        $fileName1 = rand(11111,99999).'-' .Input::file('skemaJaringan')->getClientOriginalName().'.'.$extension1; 
        File::delete('../public/assets/file/' . $irigasi->skemaJaringan);
         Input::file('skemaJaringan')->move($destinationPath, $fileName1); 
        $irigasi->skemaJaringan=$fileName1;
      }
      if (Input::hasFile('petaSituasi')) {
        $extension2 = Input::file('petaSituasi')->getClientOriginalExtension(); 
        $fileName2 = rand(11111,99999).'-' .Input::file('petaSituasi')->getClientOriginalName().'.'.$extension2; 
        File::delete('../public/assets/file/' . $irigasi->petaSituasi);
        Input::file('petaSituasi')->move($destinationPath, $fileName2); 
        $irigasi->petaSituasi=$fileName2;
      }
      
      if($irigasi->kewenangan=="1"){
        $irigasi->save();
        return redirect('data/1');
    }
      else if($irigasi->kewenangan=="2"){ 
        $irigasi->save();
        return redirect('data/2');}
      else if($irigasi->kewenangan=='3'){
        $irigasi->save();
       return redirect('data/3');}
      
    
  }


  public function tambah_titik($id)
  {

    $irigasi=Irigasi::find($id);
    return view('in_titik')->with('irigasi', $irigasi);
  }

  public function simpanKoordinat(Request $request)
  {
    $this->validate($request,[
      'nama'=>'required',/*
      'nip'=>'required',
      'username'=>'required',
      'email'=>'required',
      'password' => 'min:6|confirmed',*/
      //'password' => 'min:6|confirmed',
      ]);
    $koor= new Koordinat;
    $koor->idIrigasi=$request->id;
    $koor->nama=$request->nama;
    $koor->lat=$request->lat;
    $koor->lng=$request->lng;
    $koor->desc=$request->des;
    
    $koor->save();

    return redirect('detail/view/'.$request->id);
  
  }

}
