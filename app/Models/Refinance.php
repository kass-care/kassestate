<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refinance extends Model
{
    protected $fillable = [
        'current_loan_balance',
        'new_appraised_value',
        'cash_out_available',
        'new_mortgage_payment',
        'cash_returned_to_investor',
    ];
}
