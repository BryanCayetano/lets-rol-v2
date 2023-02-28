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
        Schema::create('historial_kh', function (Blueprint $table) {
            $table->id('id_historial');
            $table->unsignedbiginteger('id_run');
            $table->string('eventos');
            $table->integer('estado_run');
            $table->timestamps();

            $table->foreign('id_run')->references('id_run')->on('run_kh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_kh');
    }
};
