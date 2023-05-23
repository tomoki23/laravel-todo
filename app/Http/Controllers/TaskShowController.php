<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskShowController extends Controller
{
    public function show($id)
    {
        $task = Task::with('category')->find($id);

        return view('tasks.show', compact('task'));
    }
}
