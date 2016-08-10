<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'nip' => 'required|max:15',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'nip' => $data['nip'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function edit($id)
    {
        return User::create([
            'name' => $data['name'],
            'nip' => $data['nip'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function update(Request $request,$id)
    {
      $this->validate($request,[
        'name'=>'required',
        'nip'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password' => 'min:6|confirmed',

        ]);
      $user= User::find($id);
      $user->name=$request->name;
      $user->nip=$request->nip;
      $user->username=$request->username;
      $user->pic=$request->pic;
      $user->phone=$request->phone;
      $user->password=$request->password;
      $user->desc=$request->desc;
      $user->save();
      return redirect('home');
    }

}
