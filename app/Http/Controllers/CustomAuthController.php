<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomAuthController extends Controller
{
    public function login(){
        return "Login";
    }

    public function registration(){
        return view("registration");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:8|max:12'

        ]);
        $user = new User();
        $user -> name = $request->name;
        $user -> username = $request->username;
        $user -> email= $request->email;
        $user -> password = $request->password;
        $res = $user ->save();
        if($res){
            return back()->with('sukses',' berhasil registrasi',);
        }else{
            return back()->with('gagal','bro registernya');
        }
        
    }

}
