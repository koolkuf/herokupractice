<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }


public function signUp(Request $request)
{
    $this->validate($request,[
        "name" => "required",
        "email" => "required|email",
        "password" => "required|min:6",
        "password_confirmation" => "required"
    ]);



    $user = new User();

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->save();

    // return redirect()->route('products.index');
    Auth::login($user);
    return view ('addPhone');
}



  public function signIn(Request $data)
  { $data->validate([
       'email'=>'required',
       'password'=>'required'
  ]);

  $credentials = collect($data)->only(['email', 'password']);

if  (Auth::attempt([

        'email'=>$credentials['email'],
        'password'=>$credentials['password']
    ]))


    {
        $user= User::where ('email', $data->email)->first();
    Auth::login($user);
        return view('addPhone');
        // return redirect()->route('products.index');
}

return redirect()->route('login')->with("invalid", "Invalid email/password");

}

public function logout()
{

    Session::flush();

    Auth::logout();

    return redirect()->route('login');
}

}
