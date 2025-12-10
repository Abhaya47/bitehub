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
        Schema::table('notifications', function (Blueprint $table) {
            if (!Schema::hasColumn('notifications', 'user_id')) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
            }
            if (!Schema::hasColumn('notifications', 'notice_id')) {
                $table->foreignId('notice_id')->nullable()->constrained()->onDelete('cascade');
            }
            if (!Schema::hasColumn('notifications', 'title')) {
                $table->string('title');
            }
            if (!Schema::hasColumn('notifications', 'message')) {
                $table->text('message');
            }
            if (!Schema::hasColumn('notifications', 'type')) {
                $table->string('type')->default('general');
            }
            if (!Schema::hasColumn('notifications', 'is_read')) {
                $table->boolean('is_read')->default(false);
            }
            if (!Schema::hasColumn('notifications', 'read_at')) {
                $table->timestamp('read_at')->nullable();
            }
            
            $table->index(['user_id', 'is_read']);
            $table->index(['notice_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['notice_id']);
            $table->dropIndex(['user_id', 'is_read']);
            $table->dropIndex(['notice_id']);
            $table->dropColumn(['user_id', 'notice_id', 'title', 'message', 'type', 'is_read', 'read_at']);
        });
    }
};
