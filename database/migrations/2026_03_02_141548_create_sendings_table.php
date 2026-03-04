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
        Schema::create('sendings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sendingnumber_id')->constrained('sendingnumbers');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('code_id')->constrained('codes');
            $table->boolean('processed_product')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sendings');
    }
};
