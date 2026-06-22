<?php

namespace App\Http\Controllers;

use App\Models\Lender;
use Illuminate\Http\Request;

class LenderController extends Controller
{
    public function index()
    {
        $lenders = Lender::latest()->get();

        return view('lenders.index', compact('lenders'));
    }

    public function create()
    {
        return view('lenders.create');
    }

    public function store(Request $request)
    {
        Lender::create($request->all());

        return redirect()->route('lenders.index');
    }
}
