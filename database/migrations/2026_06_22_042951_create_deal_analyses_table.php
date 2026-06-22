<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deal_analyses', function (Blueprint $table) {
            $table->id();

$table->decimal('purchase_price', 12, 2)->default(0);
$table->decimal('rehab_cost', 12, 2)->default(0);
$table->decimal('arv', 12, 2)->default(0);
$table->decimal('loan_percent', 5, 2)->default(90);
$table->decimal('closing_costs', 12, 2)->default(0);
$table->decimal('monthly_rent', 12, 2)->default(0);

$table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_analyses');
    }
};
