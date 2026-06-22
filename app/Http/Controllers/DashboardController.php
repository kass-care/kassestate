<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\DealAnalysis;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProperties = Property::count();

        $totalPurchaseValue = Property::sum('purchase_price');

        $totalArv = Property::sum('arv');

        $totalRent = Property::sum('monthly_rent');

        $totalEquity = DealAnalysis::sum('arv')
            - (DealAnalysis::sum('purchase_price') + DealAnalysis::sum('rehab_cost'));

        $totalDeals = DealAnalysis::count();

        return view('dashboard', compact(
            'totalProperties',
            'totalPurchaseValue',
            'totalArv',
            'totalRent',
            'totalEquity',
            'totalDeals'
        ));
    }
}
