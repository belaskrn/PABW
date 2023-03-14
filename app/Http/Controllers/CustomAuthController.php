<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;


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
        $user -> password = Hash::make($request->password);
        $res = $user ->save();
        if($res){
            return back()->with('sukses',' berhasil registrasi',);
        }else{
            return back()->with('gagal','bro registernya');
        }
        
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:user',
            'password' => 'required|min:8|max:12'

        ]); 

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect("dashbord");
            }  else{
                return back()->with('gagal','password salah ');
            }
        }else{
            return back()->with('gagal','email tidak ada');
        }
    }

}
