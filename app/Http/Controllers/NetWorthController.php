<?php

namespace App\Http\Controllers;

use App\Models\NetWorth;
use Illuminate\Http\Request;

class NetWorthController extends Controller
{
    public function index()
    {
        $netWorths = NetWorth::latest()->get();

        return view('net-worths.index', compact('netWorths'));
    }

    public function create()
    {
        return view('net-worths.create');
    }

    public function store(Request $request)
    {
        $equity =
            $request->property_value -
            $request->loan_balance;

        $netWorth =
            $equity +
            $request->cash_reserves;

        NetWorth::create([
            'property_value' => $request->property_value,
            'loan_balance' => $request->loan_balance,
            'cash_reserves' => $request->cash_reserves,
            'equity' => $equity,
            'net_worth' => $netWorth,
        ]);

        return redirect()->route('net-worths.index');
    }
}
