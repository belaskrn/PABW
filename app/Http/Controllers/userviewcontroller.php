<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userviewcontroller extends Controller
{
    public function index(){
        $users = DB::select('select * from users');
        return view('userview',['users'=>$users]);
        }
}
