<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RehabProject extends Model
{
    protected $fillable = [
        'project_name',
        'contractor',
        'budget',
        'actual_cost',
        'status',
    ];
}
