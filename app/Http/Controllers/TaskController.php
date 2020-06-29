<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Objective;

class TaskController extends Controller
{
    public function index () {
        $tasks = Task::all();
        $objectives = Objective::all();
        return view('index', ['tasks'=>$tasks, 'objectives'=> $objectives]);
    }

    public function store(Request $request) {
        $task = new Task();
        $task->name = $request->input('name');
        $task->save();
        return redirect('/');
    }

    public function delete($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect('/');
    }

    public function detail($id) {
        $objective = Objective::find($id);
        return view('detail', ['objective'=>$objective]);

    }

 
        


    



    

    
}


