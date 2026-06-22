<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DealPipeline extends Model
{
    protected $fillable = [
        'property_address',
        'seller_name',
        'purchase_price',
        'arv',
        'target_close_date',
        'status',
        'notes'
    ];
}
