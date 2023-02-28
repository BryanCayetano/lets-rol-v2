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
        Schema::create('card_kh', function (Blueprint $table) {
            $table->id('id_card');
            $table->unsignedbiginteger('id_game');
            $table->string('name');
            $table->integer('card_lvl');
            $table->integer('card_type');
            $table->integer('card_str');
            $table->integer('card_mag');
            $table->integer('card_agi');
            $table->timestamps();

            $table->foreign('id_game')->references('id_game')->on('game');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_kh');
    }
};
