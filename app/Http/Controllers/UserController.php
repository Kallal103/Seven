<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $data = [
            'name' => 'VISER X',
            'email' => 'viserx@test.com',
            'password' =>'password'
        ];
        //User::create($data);
        // $user = new User();
        // $user->name = 'Kallal';
        // $user->email = 'Kallal@viserx.com';
        // $user->password = bcrypt('password');
        // $user->save();
        //User::where('id',8)->update(['name'=>'kallal test']);

        $user = User::all();
        return $user;

        //User::where('id',6)->delete();


        //dd($user);

        
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
