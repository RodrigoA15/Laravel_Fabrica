<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_reserva');
            $table->time('hora_reserva');
            //
            $table->unsignedBigInteger('usuario_id');
            $table->foreign("usuario_id")->references("id")->on("usuario")->onUpdate("cascade")->onDelete("cascade");
            //
            $table->unsignedBigInteger('restaurante_id');
            $table->foreign("restaurante_id")->references("id")->on("restaurante")->onUpdate("cascade")->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
