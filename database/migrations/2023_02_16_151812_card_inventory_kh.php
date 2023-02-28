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
        Schema::create('card_inventory_kh', function (Blueprint $table) {
            $table->id('id_card_inventory');
            $table->unsignedbiginteger('id_player_character');
            $table->unsignedbiginteger('id_card');
            $table->boolean('inventory_flag');
            $table->boolean('desk_flag');
            $table->boolean('used_flag');
            $table->boolean('consumed_flag');
            $table->integer('quantity');
            $table->timestamps();
            
            $table->foreign('id_player_character')->references('id_player_character')->on('player_character_kh');
            $table->foreign('id_card')->references('id_card')->on('card_kh');
        });
    }

    //Card inventory NO és un inventario. És una tabla que registra las entradas de cartas
    //que están en posesión de un jugador.
        //inventory_flag: una marca que dice que esta carta está en el inventario del
          //jugador en oposición al mazo.

        //desk_flag: una marca que dice que esta carta está en el mazo.

        //used_flag: si esta carta ha sido usada en algun momento del combate (se restaura
          //al terminar el modo combate)

        //consumed_flag: marca de cartas que no se pueden recuperar en combate con eter.

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_inventory_kh');
    }
};
