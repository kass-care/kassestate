<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    protected $fillable = [
        'property_name',
        'monthly_rent',
        'mortgage',
        'insurance',
        'taxes',
        'maintenance',
        'other_expenses',
        'monthly_cashflow',
    ];
}
