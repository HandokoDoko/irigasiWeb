<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profile;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use Session;
use File;

class ProfileController extends Controller
{
	protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'nip' => 'required|max:15',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'min:6|confirmed',
        ]);
    }
    public function update(Request $request)
    {
      $this->validate($request,[
        'name'=>'required',
        'nip'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password' => 'min:6|confirmed',
        //'password' => 'min:6|confirmed',
        ]);
      $user= Profile::find($request->id);
      $user->name=$request->name;
      $user->nip=$request->nip;
      $user->username=$request->username;
      if($request->password!=null){
        $user->password= bcrypt($request->password);
      }
      $user->desc=$request->desc;
      $user->save();
      return redirect('home');
    
  }
 
  public function uploadImg(Request $request) {
    $this->validate($request,[
        'file' => 'required|mimes:jpeg,jpg,png,gif|required|max:10000',
        ]);
   $user= Profile::find($request->id);
  
    if (Input::hasFile('image')) {
      $destinationPath = '../public/assets/img/profile'; 
      $extension = Input::file('file')->getClientOriginalExtension(); 
      $fileName = rand(11111,99999).'-'.Input::file('file')->getClientOriginalName().'.'.$extension; 
      
      if($user->pic==""){
        Input::file('file')->move($destinationPath, $fileName); 
        $user->pic=$fileName;
        $user->save();
      }else{
        File::delete('../public/assets/img/profile/' . $user->pic);
        Input::file('file')->move($destinationPath, $fileName); 
        $user->pic=$fileName;
        $user->save();
      }
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('home');
    }
    else {
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('home');
    }
  }
}
