<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'property_name',
        'category',
        'amount',
        'expense_date',
        'notes',
    ];
}
