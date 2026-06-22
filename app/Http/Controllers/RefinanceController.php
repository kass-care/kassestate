<?php

namespace App\Http\Controllers;

use App\Models\Refinance;
use Illuminate\Http\Request;

class RefinanceController extends Controller
{
    public function create()
    {
        return view('refinances.create');
    }

    public function store(Request $request)
    {
        $currentLoanBalance = $request->current_loan_balance;
        $newAppraisedValue = $request->new_appraised_value;

        $cashOutAvailable = ($newAppraisedValue * 0.75) - $currentLoanBalance;

        $refinance = Refinance::create([
            'current_loan_balance' => $currentLoanBalance,
            'new_appraised_value' => $newAppraisedValue,
            'cash_out_available' => $cashOutAvailable,
            'new_mortgage_payment' => $request->new_mortgage_payment ?? 0,
            'cash_returned_to_investor' => $cashOutAvailable,
        ]);

        return redirect()->route('refinances.show', $refinance);
    }

    public function show(Refinance $refinance)
    {
        return view('refinances.show', compact('refinance'));
    }
}
