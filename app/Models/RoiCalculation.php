<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoiCalculation extends Model
{
    protected $fillable = [
        'property_name',
        'purchase_price',
        'rehab_cost',
        'annual_cash_flow',
        'equity_created',
        'roi_percent',
    ];
}
