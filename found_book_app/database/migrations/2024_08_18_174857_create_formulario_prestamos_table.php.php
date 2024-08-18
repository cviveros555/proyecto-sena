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
        Schema::create('formulario_prestamos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_completo');
            $table->integer('numero_identificacion');
            $table->string('direccion');
            $table->integer('telefono');
            $table->date('fecha_solicitud');
            $table->date('fecha_devolucion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
