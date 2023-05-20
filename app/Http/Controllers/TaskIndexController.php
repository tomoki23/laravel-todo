<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskIndexController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $categoryId = $request->category_id;

        $tasks = Task::searchTasks($keyword, $categoryId);

        $categories = Category::all();

        return view('tasks.index', compact('tasks', 'categories'));
    }
}
