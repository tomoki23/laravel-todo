<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskIndexController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $categories = Category::all();

        return view('tasks.index', compact('tasks', 'categories'));
    }
}
