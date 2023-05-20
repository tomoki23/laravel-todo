<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskStoreController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->user();
        $title = $request->input('title');
        $body = $request->input('body');
        $category = $request->input('category');

        Task::create([
            'user_id' => $user->id,
            'title' => $title,
            'body' => $body,
            'category_id' => $category
        ]);

        return redirect()->route('tasks.index');
    }
}
