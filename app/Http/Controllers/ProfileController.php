<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Http\Requests;

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
    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'name'=>'required',
        'nip'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password' => 'min:6|confirmed',
        //'password' => 'min:6|confirmed',
        ]);
      $user= Profile::find($id);
      $user->name=$request->name;
      $user->nip=$request->nip;
      $user->username=$request->username;
      
      /*if($request->hasFile('pic')) {
            $file = Input::file('pic');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            $name = $timestamp. '-' .$file->getClientOriginalName();
            
            $image->filePath = $name;

            $file->move(public_path().'/img/profile', $name);
            $user->pic=$request->pic;
        }*/
        if($request->password!=null){
          $user->password= bcrypt($request->password);
        }
      $user->desc=$request->desc;
      $user->save();
      return redirect('home');
    }
}
