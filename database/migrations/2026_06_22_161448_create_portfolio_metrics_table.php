<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_metrics', function (Blueprint $table) {
            $table->id();

            $table->decimal('total_property_value', 15, 2)->default(0);
            $table->decimal('total_equity', 15, 2)->default(0);
            $table->decimal('total_monthly_rent', 15, 2)->default(0);
            $table->decimal('total_monthly_cashflow', 15, 2)->default(0);
            $table->decimal('total_rehab_budget', 15, 2)->default(0);

            $table->integer('total_properties')->default(0);
            $table->integer('occupied_units')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_metrics');
    }
};
