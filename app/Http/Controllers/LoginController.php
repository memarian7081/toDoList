<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index(){
    return view('home');
    }
    public function create(){
     return view('register.create');
    }
    public function register(StoreUserRequest $request){
  $validated=$request->validated();
       User::create([
      'name'=>$validated['name'],
      'userName'=>$validated['userName'],
      'email'=>$validated['email'],
      'password'=>Hash::make($validated['password']),
           'remember_token' =>Str::random(40),
  ]);
       return redirect()->route('index');
    }
    public function login(){
        return view('register.index');
    }
    public function loginPost(Request $request){
//        $validated=$request->validated();
        if (Auth::attempt()) {
            $request->session()->regenerate();
            return redirect()->route('index');
        }
        return redirect()->route('login.login');
    }
}
