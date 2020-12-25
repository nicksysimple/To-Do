<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
   public function index(){

    return Task::orderBy('created_at','DESC')->get();
     
   }


   public function store(Request $request){

    $newTask = new Task;

    $newTask->body = $request->input('body');
    $newTask->title = $request->input('title');

    $newTask->save();

    return $newTask;

  
    }

   public function destroy($id){

    $task = Task::find($id);

    if ($task) {
        $task->delete();
        return "Task Deleted Successfully.";
    }

    return "Task not Found.";
    

   }
}
