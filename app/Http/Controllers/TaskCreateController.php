<?php

namespace App\Http\Controllers;

use App\Models\Category;

class TaskCreateController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('tasks.create', compact('categories'));
    }
}
