<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskDeleteController extends Controller
{
    public function destroy($id)
    {
        Task::destroy($id);

        return redirect()->route('tasks.index');
    }
}
