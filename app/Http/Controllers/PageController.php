<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function home()
    {
        $tasks = ['Go to work', 'Go home', 'Go to sleep', 'Wake up'];


        return view('welcome', ['tasks' => $tasks, 'name' => request('name')]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
