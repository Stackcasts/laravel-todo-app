<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::orderBy('completed_at')
            ->orderBy('id', 'DESC')
            ->get();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store() {
        Task::create([
            'description' => request('description'),
        ]);

        // Return to the homepage when a task is created
        return redirect('/');
    }

    // Mark a task as completed
    public function update($id) {
        $task = Task::where('id', $id)->first();

        $task->completed_at = now();
        $task->save();

        return redirect('/');
    }

    // Divide the tasks into completed and uncompleted section
    // Delete a task permanently
}
