@extends('layout')

@section('title')
    create
@endsection

@section('content')
    <h1>Create a New Project </h1>
@endsection

@section('body')

    <form method="POST" action="/projects">

        {{csrf_field()}}

        <div>
            <input type="text" name="title" placeholder="Project Title" required value="{{ old('title')}}">
        </div>

        <div>
            <textarea name="description" placeholder="Project description" required>
                {{old('description')}}</textarea>
        </div>

        <div>
            <button type="submit">Create project</button>
        </div>

    @include('/projects/errors')

    </form>

@endsection
