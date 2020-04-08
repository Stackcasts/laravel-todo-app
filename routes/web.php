<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks.index');
});

// Replace the homepage
// Create a task
// Display a list of tasks
// Mark a task as completed
// Divide the tasks into completed and uncompleted section
// Delete a task permanently
