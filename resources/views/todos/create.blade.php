<!-- resources/views/todos/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Create Todo</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

    <a href="{{ route('todos.index') }}" class="btn btn-secondary mt-2">Back to List</a>
</div>
@endsection
