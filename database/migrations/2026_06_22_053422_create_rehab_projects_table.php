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
        Schema::create('rehab_projects', function (Blueprint $table) {

            $table->id();

            $table->string('project_name');

            $table->string('contractor')->nullable();

            $table->decimal('budget', 12, 2)->default(0);

            $table->decimal('actual_cost', 12, 2)->default(0);

            $table->string('status')->default('Not Started');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rehab_projects');
    }
};
