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
        Schema::create('run_kh', function (Blueprint $table) {
            $table->id('id_run');
            $table->unsignedbiginteger('id_game');
            $table->string('run_name');
            $table->string('run_description');
            $table->timestamps();

            $table->foreign('id_game')->references('id_game')->on('game');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('run_kh');
    }
};
