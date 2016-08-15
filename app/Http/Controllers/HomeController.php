<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Irigasi;

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

    public function detail()
    {
        return view('detail');
    }

    public function admin()
    {
        return view('admin');
    }
    public function edit($id)
    {
        $irigasi=Irigasi::find($id);
       // dd($irigasi);

        return view('editData')->with('irigasi', $irigasi);
    }

    public function data_provinsi($id)
    {
        $irigasi=Irigasi::all();
       // dd($irigasi);

        return view('data_prov')->with('irigasi', $irigasi);
    }

    public function tambah_data()
    {
        return view('input_data');
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
        'nama'=>'required',/*
        'nip'=>'required',
        'username'=>'required',
        'email'=>'required',
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
}
