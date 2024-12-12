<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class userController extends Controller
{
    public function login(Request $request)
    {
        
        $credentials = $request->only('id', 'name', 'email','password');
        if(Auth::attempt($credentials,$request->filled('remember'))){
            $user = Auth::user();
            $request->session()->regenerate();
            // return redirect('/');
            return view('welcome');
            
        }
        else{
            return ('auth pas reussie');
        }
    }


    public function logout(){
        
        Session::flush();
        
        Auth::logout();
        
        return view('welcome');
    }
}
