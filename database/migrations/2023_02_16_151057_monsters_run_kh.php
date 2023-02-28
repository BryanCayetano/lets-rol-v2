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
        Schema::create('monsters_run_kh', function (Blueprint $table) {
            $table->id('id_monster_run');
            $table->unsignedbiginteger('id_monster');
            $table->integer('id_run');
            $table->integer('estado_run');
            $table->integer('monster_health');
            $table->integer('monster_ap');
            $table->integer('monster_init');
            $table->timestamps();

            $table->foreign('id_monster')->references('id_monster')->on('monsters_kh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters_run_kh');
    }
};
