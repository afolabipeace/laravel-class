<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    public function index(){
        $name = 'Peace';
        $age = 12;
        //compact
        //return view('home',compact('name','age'));

        $users = [
            'name' =>'Peace',
            'department' => 'SE'
        ];

        //with
        //return view('home')->with('name',$name);
        //return view('home')->with('users',$users);

        //using Direct method
        return view('home', [
            'age'=>$age,
            'name'=>$name,
            'users'=>$users
        ]);
    }

    public function show ($title){
        $users = [
            'name' => 'Peace',
            'department'=>'SE'
        ];
        return view('welcome',[
            'product'=>$users[$title] ?? 'title'. $title.'not found'
        ]);
    }
}
