<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Symfony\Component\Console\Input\Input;

class TaskUpdateController extends Controller
{
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        $task->category_id = $request->input('category');
        $task->save();

        return redirect()->route('tasks.show', ['id' => $task->id]);
    }
}
