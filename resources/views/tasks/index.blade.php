@extends('layout')

@section('title')
    Tasks
@endsection

@section('content')
    <h1 class="font-bold text-3xl">Tasks List</h1>
    <ul>
        <div class="px-64">
            @foreach ($tasks as $task)
                <li class="border my-3 p-3">
                    {{ $task->title }}
                    <small class="float-right">Created at {{ $task->created_at }}</small>
                </li>
            @endforeach
        </div>
    </ul>
@endsection
