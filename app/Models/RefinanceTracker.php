<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefinanceTracker extends Model
{
    protected $fillable = [
        'property_name',
        'current_loan_balance',
        'new_loan_amount',
        'current_interest_rate',
        'new_interest_rate',
        'cash_out_amount',
        'current_payment',
        'new_payment',
        'lender',
        'target_refinance_date',
        'status',
    ];
}
