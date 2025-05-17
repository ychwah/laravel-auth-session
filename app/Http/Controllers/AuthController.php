<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{   
    public function login(Request $request) {
      $query = User::where('email', $request->email)->where('password', $request->password)->first();
      
      if($query != null){
        $request->session()->put('user', $query);
        return redirect()->route('view.home');
      }
      return redirect()->route('view.login')->withErrors('Email or password mismatch!');
    }
    
    public function register(Request $request) {

      $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required'
        ]);
        
      if($request->password != $request->vpassword) {
        return redirect()->route('view.register')->withErrors('Password does not match!')->withInput();
      }
      
      $query = User::insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' =>$request->password
      ]);
      
      return $query ? redirect()->route('view.login')->withErrors('Please login to continue.') : redirect()->route('view.register')->withErrors('User could not be created!');
    }
    
    public function logout(Request $request){

      $request->session()->forget('user');

      return redirect()->route('view.login')->with('success', 'You have been logged out.');

    }
}
