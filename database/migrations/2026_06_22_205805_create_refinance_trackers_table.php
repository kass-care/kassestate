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
	Schema::create('refinance_trackers', function (Blueprint $table) {
    $table->id();

    $table->string('property_name');

    $table->decimal('current_loan_balance', 12, 2)->default(0);
    $table->decimal('new_loan_amount', 12, 2)->default(0);

    $table->decimal('current_interest_rate', 5, 2)->default(0);
    $table->decimal('new_interest_rate', 5, 2)->default(0);

    $table->decimal('cash_out_amount', 12, 2)->default(0);

    $table->decimal('current_payment', 12, 2)->default(0);
    $table->decimal('new_payment', 12, 2)->default(0);

    $table->string('lender')->nullable();

    $table->date('target_refinance_date')->nullable();

    $table->string('status')->default('Preparing');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refinance_trackers');
    }
};
