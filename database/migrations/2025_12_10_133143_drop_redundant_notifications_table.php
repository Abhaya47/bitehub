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
        // Drop the redundant notifications table as we now use normalized structure
        Schema::dropIfExists('notifications');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // This migration is not reversible as it's a permanent structural change
        // To restore, you would need to recreate the table structure from scratch
        throw new \Exception('This migration cannot be reversed. The notifications table was permanently removed as part of database normalization.');
    }
};
