<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;

class TaskStoreController extends Controller
{
    public function store(CreateTaskRequest $request)
    {
        $user = $request->user();
        $title = $request->input('title');
        $body = $request->input('body');
        $categoryId = $request->input('category_id');

        Task::create([
            'user_id' => $user->id,
            'title' => $title,
            'body' => $body,
            'category_id' => $categoryId
        ]);

        return redirect()->route('tasks.index');
    }
}
