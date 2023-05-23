<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;

class TaskEditController extends Controller
{
    public function edit($id)
    {
        $task = Task::with('category')->find($id);
        $categories = Category::all();

        return view('tasks.edit', compact('task', 'categories'));
    }
}
