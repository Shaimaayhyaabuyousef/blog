<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use League\CommonMark\Extension\Table\Table;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class TaskController extends Controller
{
    public function index (){
        $tasks = DB::table('tasks')->get();
        return view('Tasks',compact('tasks'));
    }
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->update();

       return redirect('')->with('Updated successfully!');
    }
}
