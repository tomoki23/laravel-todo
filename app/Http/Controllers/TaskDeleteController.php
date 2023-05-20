<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskDeleteController extends Controller
{
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
