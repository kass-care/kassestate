<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'investment_capacity',
        'preferred_market',
        'notes',
    ];
}
