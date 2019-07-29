<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects/index', compact('projects'));
    }

    public function create()
    {
        return view('projects/create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:5', 'max:50'],
            'description' => ['required', 'min:10', 'max:255']
        ]);

        Project::create($attributes);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('/projects/show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('/projects/edit', compact('project'));
    }

    public function update(Project $project)
    {
        request()->validate(['title' => 'required', 'description' => 'required']);
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {

        $project->delete();

        return redirect('/projects');
    }
}
