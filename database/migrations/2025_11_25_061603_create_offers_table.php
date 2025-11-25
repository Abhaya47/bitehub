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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id')
                ->constrained()
                ->onDelete('cascade'); // If a restaurant is deleted, its offers are also deleted

            $table->string('title');
            $table->text('description');

            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();

            $table->dateTime('start_at');
            $table->dateTime('end_at');

            $table->enum('discount_type', ['percentage', 'fixed'])->default('percentage');
            $table->decimal('discount_value', 8, 2)->default(0.00); // Value of the discount
            $table->integer('availed_count')->default(0); // Tracks how many times the offer has been availed

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
