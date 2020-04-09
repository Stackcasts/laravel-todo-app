@extends('layouts.app')

@section('content')
  <h1>Task List</h1>

  @foreach($tasks as $task)
    <div class="card" style="margin-bottom: 20px;">
      <div class="card-body">
        <p>{{ $task->description}}</p>
        <a class="btn btn-light" href="#">Complete</a>
      </div>
    </div>
  @endforeach
  <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection
