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
        //
        Schema::table('ratings', function (Blueprint $table) {
            $table->integer('five_star')->default(0)->nullable();
            $table->integer('four_star')->default(0)->nullable();
            $table->integer('three_star')->default(0)->nullable();
            $table->integer('two_star')->default(0)->nullable();
            $table->integer('one_star')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
