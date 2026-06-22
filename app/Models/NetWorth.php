<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NetWorth extends Model
{
    protected $fillable = [
        'property_value',
        'loan_balance',
        'cash_reserves',
        'equity',
        'net_worth',
    ];
}
