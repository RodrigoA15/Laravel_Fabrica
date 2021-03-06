<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestauranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_restaurante', '65');
            $table->string('direccion_restaurante', '65');
            $table->string('telefono_restaurante', '10');
            $table->time('hora_inicio');
            $table->time('hora_cierre');

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
        Schema::dropIfExists('restaurante');
    }
}
