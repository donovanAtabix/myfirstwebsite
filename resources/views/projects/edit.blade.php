@extends('layout')

@section('title')
    edit
@endsection

@section('content')
    <h1 class="title">Edit a project</h1>
@endsection

@section('body')

    <form method="POST" action="/projects/{{$project->id}}">
        {{ method_field('PATCH')}}
        {{csrf_field()}}

        <div class="field">

            <label class="label" for="title">Title</label>

            <div class="control">

                <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}" required>

            </div>

        </div>

        <div class="field">
            <label class="label" for="description"></label>

            <div class="control">
                <textarea name="description" class="textarea" required>{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update project</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/projects/{{$project->id}}">
        {{ method_field('DELETE')}}
        {{csrf_field()}}

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete project</button>
            </div>
        </div>
    </form>

@endsection
