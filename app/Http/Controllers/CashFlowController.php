<?php

namespace App\Http\Controllers;

use App\Models\CashFlow;
use Illuminate\Http\Request;

class CashFlowController extends Controller
{
    public function index()
    {
        $cashFlows = CashFlow::latest()->get();

        return view('cash-flows.index', compact('cashFlows'));
    }

    public function create()
    {
        return view('cash-flows.create');
    }

    public function store(Request $request)
    {
        $monthlyCashflow =
            $request->monthly_rent
            - $request->mortgage
            - $request->insurance
            - $request->taxes
            - $request->maintenance
            - $request->other_expenses;

        CashFlow::create([
            'property_name' => $request->property_name,
            'monthly_rent' => $request->monthly_rent,
            'mortgage' => $request->mortgage,
            'insurance' => $request->insurance,
            'taxes' => $request->taxes,
            'maintenance' => $request->maintenance,
            'other_expenses' => $request->other_expenses,
            'monthly_cashflow' => $monthlyCashflow,
        ]);

        return redirect()->route('cash-flows.index');
    }
}
