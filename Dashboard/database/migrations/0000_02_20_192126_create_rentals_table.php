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
        Schema::create('rentals', function (Blueprint $table) {
    $table->id();

    $table->foreignId('user_id')
          ->constrained('users')
          ->cascadeOnDelete();

    $table->foreignId('car_id')
          ->constrained('cars')
          ->cascadeOnDelete();

    $table->foreignId('driver_id')
          ->constrained('drivers')
          ->cascadeOnDelete();

    $table->date('pickup_date');
    $table->date('return_date')->nullable();
    $table->decimal('total_amount', 10, 2)->nullable();
    $table->string('status')->default('pending');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
