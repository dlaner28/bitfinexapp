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
        Schema::create('candlestick_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cryptocurrency_id');
            $table->unsignedBigInteger('currency_id');
            $table->timestamp('timestamp');
            $table->decimal('open', 18, 8);
            $table->decimal('high', 18, 8);
            $table->decimal('low', 18, 8);
            $table->decimal('close', 18, 8);
            $table->decimal('volume', 18, 8);
            $table->timestamps();
    
            $table->index('cryptocurrency_id');
            $table->index('currency_id');
            $table->index('timestamp');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candlestick_data');
    }
};
