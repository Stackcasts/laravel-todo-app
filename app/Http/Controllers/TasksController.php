<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        return view('tasks.index');
    }

    public function create() {
        return view('tasks.create');
    }

    public function store() {
        $task = Task::create([
            'description' => request('description'),
        ]);

        return dd($task);
    }

    // Handle the tasks submission data
    // Create a task
    // Display a list of tasks
    // Mark a task as completed
    // Divide the tasks into completed and uncompleted section
    // Delete a task permanently
}
