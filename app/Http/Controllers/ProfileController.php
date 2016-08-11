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
            'password' => 'required|min:6|confirmed',
        ]);
    }
    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'name'=>'required',
        'nip'=>'required',
        'username'=>'required',
        'email'=>'required',
        //'password' => 'min:6|confirmed',
        ]);
      $user= Profile::find($id);
      $user->name=$request->name;
      $user->nip=$request->nip;
      $user->username=$request->username;
      $user->pic=$request->pic;
      //$user->password=$request->password;
      $user->desc=$request->desc;
      $user->save();
      return redirect('home');
    }
}
