@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <h1>Welcome {{$name}}</h1>
@endsection

@section('body')
    @foreach ($tasks as $task)

    <li>{{$task}}</li>

    @endforeach
@endsection
