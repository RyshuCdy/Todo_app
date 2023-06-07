<!-- resources/views/todos/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Edit Todo</h1>

    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $todo->title }}" required>
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" name="completed" id="completed" class="form-check-input" {{ $todo->completed ? 'checked' : '' }}>
            <label for="completed" class="form-check-label">Completed</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <a href="{{ route('todos.index') }}" class="btn btn-secondary mt-2">Back to List</a>
</div>
@endsection
