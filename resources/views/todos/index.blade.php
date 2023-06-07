<!-- resources/views/todos/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Todo List</h1>

    <ul class="list-group">
        @foreach ($todos as $todo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $todo->title }}
                <div>
                    <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('todos.edit', $todo) }}" class="btn btn-primary btn-sm">Edit</a>
                </div>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('todos.create') }}" class="btn btn-success mt-4">Create Todo</a>
</div>
@endsection
