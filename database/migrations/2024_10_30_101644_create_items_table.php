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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->enum('metodo_obtencion', ['Afloramiento minero', 'Pila de huesos', 'Monstruo'])->default('Monstruo');
            $table->enum('rareza', ['Rareza 10', 'Rareza 11', 'Rareza 12'])->default('Rareza 10');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
