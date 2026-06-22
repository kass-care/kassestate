<?php

namespace App\Http\Controllers;

use App\Models\DealAnalysis;
use Illuminate\Http\Request;

class DealAnalysisController extends Controller
{
    public function create()
    {
        return view('deal-analyses.create');
    }

    public function store(Request $request)
    {
        $deal = DealAnalysis::create($request->all());

        return redirect()->route('deal-analyses.show', $deal);
    }

    public function show(DealAnalysis $dealAnalysis)
    {
        return view('deal-analyses.show', compact('dealAnalysis'));
    }
}
