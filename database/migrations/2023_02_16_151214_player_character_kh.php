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
        Schema::create('player_character_kh', function (Blueprint $table) {
            $table->id('id_player_character');
            $table->unsignedbiginteger('id_base_character');
            $table->unsignedbiginteger('id_user');
            $table->unsignedbiginteger('id_run');
            $table->integer('player_lvl');
            $table->integer('player_xp');
            $table->integer('player_platines');
            $table->integer('player_init');
            $table->integer('player_hp');
            $table->integer('player_str');
            $table->integer('player_mag');
            $table->integer('player_agi');
            $table->unsignedbiginteger('last_card');
            $table->timestamps();

            $table->foreign('id_base_character')->references('id_base_character')->on('base_character_kh');
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_run')->references('id_run')->on('run_kh');
            $table->foreign('last_card')->references('id_card')->on('card_kh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_character_kh');
    }
};
