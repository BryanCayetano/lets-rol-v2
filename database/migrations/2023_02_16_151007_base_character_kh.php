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
        Schema::create('base_character_kh', function (Blueprint $table) {
            $table->id('id_base_character');
            $table->unsignedbiginteger('id_user');
            $table->string('name');
            $table->string('race');
            $table->string('description');
            $table->binary('base_character_img');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('base_character_kh');
    }
};
