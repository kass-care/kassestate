<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->id();

            $table->string('property_name');

            $table->decimal('monthly_rent', 12, 2)->default(0);
            $table->decimal('mortgage', 12, 2)->default(0);
            $table->decimal('insurance', 12, 2)->default(0);
            $table->decimal('taxes', 12, 2)->default(0);
            $table->decimal('maintenance', 12, 2)->default(0);
            $table->decimal('other_expenses', 12, 2)->default(0);

            $table->decimal('monthly_cashflow', 12, 2)->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_flows');
    }
};
