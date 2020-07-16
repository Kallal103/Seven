<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        // DB::insert('insert into users(name,email,password)values(?,?,?)',[
        //   'kallal test','kallal@test.com', 'password'  
        // ]);
        //DB::update('update users set name = ? where id = 1',['VISER X']);

        //$users = DB::select('select * from users');
        //return $users;
        //DB::delete('delete from users where id = 4');
        return view('home');
    }
}
