<?php

namespace App\Http\Controllers;

use App\Models\DealPipeline;
use Illuminate\Http\Request;

class DealPipelineController extends Controller
{
    public function index()
    {
        $deals = DealPipeline::latest()->get();

        return view('deal-pipelines.index', compact('deals'));
    }

    public function create()
    {
        return view('deal-pipelines.create');
    }

    public function store(Request $request)
    {
        DealPipeline::create($request->only([
            'property_address',
            'seller_name',
            'purchase_price',
            'arv',
            'target_close_date',
            'status',
            'notes',
        ]));

        return redirect()->route('deal-pipelines.index');
    }
}
