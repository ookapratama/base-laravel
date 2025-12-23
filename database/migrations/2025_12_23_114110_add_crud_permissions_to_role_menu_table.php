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
        Schema::table('role_menu', function (Blueprint $table) {
            $table->boolean('can_create')->default(false);
            $table->boolean('can_read')->default(true);
            $table->boolean('can_update')->default(false);
            $table->boolean('can_delete')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('role_menu', function (Blueprint $table) {
            $table->dropColumn(['can_create', 'can_read', 'can_update', 'can_delete']);
        });
    }
};
