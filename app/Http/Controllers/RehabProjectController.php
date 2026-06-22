<?php

namespace App\Http\Controllers;

use App\Models\RehabProject;
use Illuminate\Http\Request;

class RehabProjectController extends Controller
{
    public function index()
    {
        $rehabProjects = RehabProject::latest()->get();

        return view('rehab-projects.index', compact('rehabProjects'));
    }

    public function create()
    {
        return view('rehab-projects.create');
    }

    public function store(Request $request)
    {
        RehabProject::create($request->all());

        return redirect()->route('rehab-projects.index');
    }
}
