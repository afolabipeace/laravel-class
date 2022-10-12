<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Todocontroller extends Controller
{
    //
    public function create(Request $request){
        dd($request);
        // return $request->to/.  mmmk
        // $insert = DB::table('todo_tb')->insert([
        //     "todo_name" => $request->todo_name,
        //     "todo_desc" => $request->todo_desc,
        //     "user_id" =>1,
        // ]);

        // $resp =[];
        // if($insert){
        //     $resp['success'] = true;
        //     $resp['message'] = 'This opperation is successful';
        // }else{
        //     $resp['success'] = false;
        // }
        // return json_encode($resp);
    }

    public function read (){
        $todos = DB::table("todo_tb")->get();
        return view ("todo.todo", ["todos" => $todos]);
    }
    public function edit ($todo_id){
        $todo = DB::table("todo_tb")->where("todo_id", $todo_id)->first();
        return view ("todo.edittodo", ["todo" => $todo]);
    }
    public function update (Request $request, $id){
        $todoUpdate = DB::table("todo_tb")->where("todo_id", $id)->update([
        "todo_name" => $request->todo_name,
        "todo_desc" => $request->todo_desc
    ]);
        return redirect("/todo");
    }

    public function delete ($todo_id){
        $todo = DB::table("todo_tb")->where("todo_id", $todo_id)->delete();
        return redirect ("/todo");
        // return view ("todo.todo", ["todos" => $todos]);
    }
}
