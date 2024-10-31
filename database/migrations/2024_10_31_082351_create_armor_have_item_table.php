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
        Schema::create('armor_have_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('armor_id')->constrained('armor');
            $table->foreignId('item_id')->constrained('item');
            $table->integer('quantity')->default(0);
            $table->timestamps();

            $table->check('quantity <= 10');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armor_have_item');
    }
};
