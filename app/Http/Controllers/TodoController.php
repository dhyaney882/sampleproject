<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodoController extends Controller
{
    public function index(){
        $todos =Todo::all();
        return view('main',compact('todos'));

    }
   
    public function addTodo(){
        return view('addtodoform');
    }
    public function storeTodo(Request $request){
        $todo_detail=$request->todo;
        $datastore=new Todo;
        $datastore->detail=$todo_detail;
        $datastore->save();
        return redirect('todo')->with('success','New todo added successfully');
}
public function deleteTodo($id){
    $tododelete=Todo::FindorFail($id);
    $tododelete->delete();
    return redirect('todo')->with('successdanger','Todo deleted successfully');

}
}