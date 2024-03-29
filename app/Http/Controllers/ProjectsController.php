<?php

namespace App\Http\Controllers;

use App\Project;
use App\Services\Twitter;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();

        return view('projects.index',compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project, Twitter $twitter)
    {

        dd($twitter);

        return view('projects.show',compact('project'));
    }

    public function edit(Project $project)
    {

        return view('projects.edit',compact('project'));

    }

    public function update(Project $project)
    {
        $project->update(request(['title','decription']));


        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');

    }

    public function store()
    {
        $attributes=request()->validate([
            'title' =>['required','min:3'],
            'description' => ['required','min:3']
        ]);

        Project::create($attributes);


        return redirect('/projects');
    }
}
