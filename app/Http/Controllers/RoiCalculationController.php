<?php

namespace App\Http\Controllers;

use App\Models\RoiCalculation;
use Illuminate\Http\Request;

class RoiCalculationController extends Controller
{
    public function index()
    {
        $roiCalculations = RoiCalculation::latest()->get();

        return view('roi-calculations.index', compact('roiCalculations'));
    }

    public function create()
    {
        return view('roi-calculations.create');
    }

    public function store(Request $request)
    {
        $totalInvestment =
            $request->purchase_price +
            $request->rehab_cost;

        $roiPercent =
            (
                ($request->annual_cash_flow + $request->equity_created)
                / max($totalInvestment,1)
            ) * 100;

        RoiCalculation::create([
            'property_name' => $request->property_name,
            'purchase_price' => $request->purchase_price,
            'rehab_cost' => $request->rehab_cost,
            'annual_cash_flow' => $request->annual_cash_flow,
            'equity_created' => $request->equity_created,
            'roi_percent' => round($roiPercent,2),
        ]);

        return redirect()->route('roi-calculations.index');
    }
}
