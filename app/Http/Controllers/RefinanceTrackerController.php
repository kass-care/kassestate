<?php

namespace App\Http\Controllers;

use App\Models\RefinanceTracker;
use Illuminate\Http\Request;

class RefinanceTrackerController extends Controller
{
    public function index()
    {
        $refinances = RefinanceTracker::latest()->get();

        return view('refinance-trackers.index', compact('refinances'));
    }

    public function create()
    {
        return view('refinance-trackers.create');
    }

    public function store(Request $request)
    {
        RefinanceTracker::create($request->all());

        return redirect()->route('refinance-trackers.index');
    }
}
