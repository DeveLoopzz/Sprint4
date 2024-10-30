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
        Schema::create('armor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('item_1')->constrained('items');
            $table->foreignId('item_2')->constrained('items');
            $table->foreignId('item_3')->constrained('items');
            $table->foreignId('item_4')->constrained('items');
            $table->enum('rareza', ['Rareza_10', 'Rareza_11', 'Rareza_12'])->default('Rareza_10');
            $table->enum('tipo', ['Casco', 'Pechera', 'Guantes', 'Cinturon', 'Botas'])->default('Casco');
            $table->int('armadura')->default(0);
            $table->int('res_fuego')->default(0);
            $table->int('res_agua')->default(0);
            $table->int('res_rayo')->default(0);
            $table->int('res_hielo')->default(0);
            $table->int('res_draco')->default(0);
            $table->enum('socket_1', [0,1,2,3,4])->default(0)->nullable();
            $table->enum('socket_2', [0,1,2,3,4])->default(0)->nullable();
            $table->enum('socket_3', [0,1,2,3,4])->default(0)->nullable();
            $table->timestamps();


            $table->check('res_fuego <= 5');
            $table->check('res_agua <= 5');
            $table->check('res_rayo <= 5');
            $table->check('res_hielo <= 5');
            $table->check('res_draco <= 5');
            $table->check('armor <= 200'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armor');
    }
};
