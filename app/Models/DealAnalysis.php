<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DealAnalysis extends Model
{
    protected $fillable = [
        'purchase_price',
        'rehab_cost',
        'arv',
        'loan_percent',
        'closing_costs',
        'monthly_rent',
    ];

    public function getEquityCreatedAttribute()
    {
        return $this->arv - ($this->purchase_price + $this->rehab_cost);
    }

    public function getLoanAmountAttribute()
    {
        return ($this->loan_percent / 100) * $this->purchase_price;
    }

    public function getCashNeededAttribute()
    {
        return ($this->purchase_price + $this->rehab_cost + $this->closing_costs)
            - $this->loan_amount;
    }

    public function getRefinanceAmountAttribute()
    {
        return $this->arv * 0.75;
    }

    public function getRecommendationAttribute()
    {
        return $this->equity_created > 30000 ? 'BUY' : 'PASS';
    }
}
