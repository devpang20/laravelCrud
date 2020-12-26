@extends('layout')

@section('content')
    <h1>Project List</h1>

    @foreach ($projects as $project)
        Title: {{ $project->title }} <br>
        Desc: {{ $project->description  }} <br>
    @endforeach
@endsection
