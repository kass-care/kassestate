<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'address',
        'purchase_price',
        'rehab_cost',
        'arv',
        'bedrooms',
        'bathrooms',
        'monthly_rent',
        'purchase_date',
    ];
}
