<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::orderBy('id', 'DESC')
            ->get();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store() {
        $task = Task::create([
            'description' => request('description'),
        ]);

        // Return to the homepage when a task is created
        return redirect('/');
    }

    // Handle the tasks submission data
    // Create a task
    // Display a list of tasks
    // Mark a task as completed
    // Divide the tasks into completed and uncompleted section
    // Delete a task permanently
}
