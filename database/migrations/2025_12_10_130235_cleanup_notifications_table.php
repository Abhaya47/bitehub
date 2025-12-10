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
        // Remove redundant columns from notifications table
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropColumn(['title', 'message', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Add back the columns for rollback
        Schema::table('notifications', function (Blueprint $table) {
            $table->string('title');
            $table->text('message');
            $table->string('type')->default('general');
        });
    }
};
