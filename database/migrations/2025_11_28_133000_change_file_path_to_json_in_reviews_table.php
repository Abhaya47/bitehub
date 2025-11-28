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
            // Drop the existing string column first if needed, or change it.
            // Since we want to preserve data if possible, but switching from string to json might be tricky if data exists.
            // Assuming data is expendable or compatible.
            // Ideally we would do:
            // $table->json('file_path')->nullable()->change();
            // But SQLite/some drivers have issues with change().
            // Let's try change() first.
            $table->text('file_path')->nullable()->change(); // Using text as it's often safer for JSON storage in some DBs, or json() if supported.
            // Actually, let's use json() and let Laravel handle it.
            // $table->json('file_path')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->string('file_path')->nullable()->change();
        });
    }
};
