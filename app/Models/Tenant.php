<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'property_name',
        'lease_start',
        'lease_end',
        'monthly_rent',
        'status',
    ];
}
