<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class mycontroller extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
    
    public function portfolioForm(){
        return view('portfolioForm');
    }



    public function adduser(Request $r){
        $validatedData = $r->validate([
            'fname' => 'required|string|max:255',
            'num_phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $hashedPassword = Hash::make($validatedData['password']);

        DB::table('users')->insert([
            'name' => $validatedData['fname'],
            'email' => $validatedData['email'],
            'numberphone' => $validatedData['num_phone'],
            'password' => $hashedPassword,
        ]);
        // DB::insert("INSERT INTO users (`name`, `email`, `numberphone`, `password`) 
        // values('$r->fname','$r->email', '$r->num_phone','$r->password')");
        return redirect('login');
    }

}
