@extends('layout')

@section('title')
   Projects
@endsection

@section('content')

    <h1 class="title">Project</h1>
@endsection

@section('body')
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            </li>
        @endforeach
    </ul>
 @endsection

