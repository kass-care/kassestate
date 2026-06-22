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
	Schema::create('net_worths', function (Blueprint $table) {
    $table->id();

    $table->decimal('property_value',12,2);
    $table->decimal('loan_balance',12,2);
    $table->decimal('cash_reserves',12,2);

    $table->decimal('equity',12,2)->nullable();
    $table->decimal('net_worth',12,2)->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('net_worths');
    }
};
