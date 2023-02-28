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
        Schema::create('chat_kh', function (Blueprint $table) {
            $table->id('id_chat');
            $table->unsignedbiginteger('id_user');
            $table->unsignedbiginteger('id_run');
            $table->string('text_chat');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_run')->references('id_run')->on('run_kh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_kh');
    }
};
