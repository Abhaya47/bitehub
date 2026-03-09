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
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedInteger('helpful_count')->default(0)->after('rating');
            $table->unsignedBigInteger('parent_id')->nullable()->after('helpful_count');
            $table->foreign('parent_id')->references('id')->on('reviews')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropColumn(['helpful_count', 'parent_id']);
        });
    }
};
