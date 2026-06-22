<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{
    protected $fillable = [
        'name',
        'company',
        'phone',
        'email',
        'interest_rate',
        'max_loan_amount',
        'notes'
    ];
}
