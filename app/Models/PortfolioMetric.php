<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioMetric extends Model
{
    protected $fillable = [
        'total_property_value',
        'total_equity',
        'total_monthly_rent',
        'total_monthly_cashflow',
        'total_rehab_budget',
        'total_properties',
        'occupied_units',
    ];
}
