<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){

        return view('administrator.login');



    }
    public function handleLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email|min:4',
            'password'=>'required|min:6|max:100',
            'remember_me'=>'required'
        ]);
        $data=$request->only('email','password');
        if(Auth::attempt($data)){
            return redirect('/dashboard');
        }else{
            $request->session()->flash('error','your email or password maybe wrong?');
            return back()->withInput();
        }

    }

    public function logOut(){
        Auth::logout();
        return redirect('/');
    }
}
