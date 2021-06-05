<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class HomeController extends Controller
{
    public function index()
    {
        return view('layout.app');

    }
    public function getTasks()
    {
        $tasks = Task::all();
        
        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

  public function createView()
{
    return view('create');
}  
public function submit(Request $request)
{
    Task::create([
        'name'=>$request->name,
        'description'=>$request->description,
    ]);
    return redirect('tasks');
}
 public function editView($id)
 {
    $task = Task::where('id', $id)->first();
    return view('editView', [
        'task'=>$task
    ]);
 }
 public function edit(Request $request, $id)
 {
    $task = Task::where('id', $id)->first();
    $task->name = $request->name;
    $task->description = $request->description;
    $task->save();
    return redirect('tasks');

 }
 public function delete($id)
 {
    $task = Task::where('id', $id)->first();
    $task->delete();
    return redirect('tasks');
 }
 
}
