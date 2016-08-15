<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profile;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use Session;

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
        'file'=>'required|max:10000',
        ]);
   $user= Profile::find($request->id);
  // getting all of the post data
  $file = array('file' => Input::file('file'));
  // setting up rules
  $rules = array('file' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('home')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('file')->isValid()) {
      $destinationPath = '../public/assets/img/profile'; // upload path
      $extension = Input::file('file')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      $user->pic=$fileName;
      $user->save();
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('home');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('home');
    }
  }
}
}
