<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenant;
use App\Models\RehabProject;
use App\Models\DealAnalysis;

class PortfolioMetricController extends Controller
{
    public function index()
    {
        $totalProperties = Property::count();
        $totalPropertyValue = Property::sum('arv');
        $totalMonthlyRent = Tenant::sum('monthly_rent');
        $occupiedUnits = Tenant::where('status', 'Active')->count();

        $totalRehabBudget = RehabProject::sum('budget');
        $totalRehabActual = RehabProject::sum('actual_cost');

        $totalEquity = DealAnalysis::sum('arv')
            - (DealAnalysis::sum('purchase_price') + DealAnalysis::sum('rehab_cost'));

        $totalMonthlyCashflow = $totalMonthlyRent;

        return view('portfolio-metrics.index', compact(
            'totalProperties',
            'totalPropertyValue',
            'totalMonthlyRent',
            'occupiedUnits',
            'totalRehabBudget',
            'totalRehabActual',
            'totalEquity',
            'totalMonthlyCashflow'
        ));
    }
}
