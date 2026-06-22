<?php

namespace App\Http\Controllers;

use App\Models\Property;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProperties = Property::count();

        $totalPurchaseValue = Property::sum('purchase_price');

        $totalArv = Property::sum('arv');

        $totalRent = Property::sum('monthly_rent');

        return view('dashboard', compact(
            'totalProperties',
            'totalPurchaseValue',
            'totalArv',
            'totalRent'
        ));
    }
}
