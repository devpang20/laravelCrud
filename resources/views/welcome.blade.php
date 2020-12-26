@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    Welcome

    @foreach($items as $item)
        <li>{{ $item }}</li>
    @endforeach
@endsection