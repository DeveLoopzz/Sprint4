<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('armor', function (Blueprint $table) {
            DB::statement("ALTER TABLE armor ADD CONSTRAINT chk_armor CHECK(armadura>= 0 AND armadura<=200)");
            DB::statement("ALTER TABLE armor ADD CONSTRAINT chk_res_fuego CHECK(res_fuego >= -5 AND res_fuego <= 5)");
            DB::statement("ALTER TABLE armor ADD CONSTRAINT chk_res_agua CHECK(res_agua >= -5 AND res_agua <= 5)");
            DB::statement("ALTER TABLE armor ADD CONSTRAINT chk_res_rayo CHECK(res_rayo >= -5 AND res_rayo <= 5)");
            DB::statement("ALTER TABLE armor ADD CONSTRAINT chk_res_hielo CHECK(res_hielo >= -5 AND res_hielo <= 5)");
            DB::statement("ALTER TABLE armor ADD CONSTRAINT chk_res_draco CHECK(res_draco >= -5 AND res_draco <= 5)");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('armor', function (Blueprint $table) {
            DB::statement("ALTER TABLE armor DROP CONSTRAINT");
            DB::statement("ALTER TABLE armor DROP CONSTRAINT");
            DB::statement("ALTER TABLE armor DROP CONSTRAINT");
            DB::statement("ALTER TABLE armor DROP CONSTRAINT");
            DB::statement("ALTER TABLE armor DROP CONSTRAINT");
            DB::statement("ALTER TABLE armor DROP CONSTRAINT");
        });
    }
};
