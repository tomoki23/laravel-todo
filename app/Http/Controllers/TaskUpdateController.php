<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Symfony\Component\Console\Input\Input;

class TaskUpdateController extends Controller
{
    public function update(UpdateTaskRequest $request, $id)
    {
        $task = Task::find($id);
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        $task->category_id = $request->input('category_id');
        $task->save();

        return redirect()->route('tasks.show', ['id' => $task->id]);
    }
}
