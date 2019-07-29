<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        request()->validate(['description' => ['required', 'min:5', 'max:20']]);

        $project->addTask(request('description'));

        return back();
    }
}
