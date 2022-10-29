<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastelerias', function (Blueprint $table) {
            $table->id();

            //datos que necesitamos
            $table->string('fullname');
            $table->string('direccion');
            $table->string('email');
            $table->string('telefono');
            $table->string('fecha');
            $table->string('descripcion');
            $table->string('pastel-aleman');
            $table->string('pastel-capuchino');
            $table->string('pastel-tres-leches');
            $table->string('pastel-queso');
            $table->string('pastel-americano');
            $table->string('pastel-moka');
            $table->string('pastel-frutas');
            $table->string('pastel-carlos');
            $table->string('decoracion-geometrica');
            $table->string('decoracion-drip-cake');
            $table->string('decoracion-vela-tradicional');
            $table->string('decoracion-vela-numerica');

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
        Schema::dropIfExists('pastelerias');
    }
};
