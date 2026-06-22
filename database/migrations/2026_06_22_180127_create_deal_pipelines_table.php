<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deal_pipelines', function (Blueprint $table) {

            $table->id();

            $table->string('property_address');

            $table->string('seller_name')->nullable();

            $table->decimal('purchase_price',15,2)->default(0);

            $table->decimal('arv',15,2)->default(0);

            $table->date('target_close_date')->nullable();

            $table->string('status')->default('Lead');

            $table->text('notes')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deal_pipelines');
    }
};
