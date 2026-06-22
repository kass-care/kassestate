<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('refinances', function (Blueprint $table) {
            $table->id();

            $table->decimal('current_loan_balance', 12, 2);
            $table->decimal('new_appraised_value', 12, 2);

            $table->decimal('cash_out_available', 12, 2)->default(0);
            $table->decimal('new_mortgage_payment', 12, 2)->default(0);
            $table->decimal('cash_returned_to_investor', 12, 2)->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('refinances');
    }
};
