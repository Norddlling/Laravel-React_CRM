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
        Schema::create('arrived', function (Blueprint $table) {
            $table->id();
            $table->foreignId('arrivingnumbers_id')->constrained('arrivingnumbers');
            $table->foreignId('code_id')->constrained('codes');
            $table->foreignId('user_id')->constrained('users');
            $table->datetime('completed_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arrived');
    }
};
