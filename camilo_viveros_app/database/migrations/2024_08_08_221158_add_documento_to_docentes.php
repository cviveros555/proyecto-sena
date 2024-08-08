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
        Schema::table('docentes', function (Blueprint $table) {
            $table->integer('numero_documento')->after('apellido');
            $table->integer('numero_celular')->after('numero_documento');
            $table->string('ciudad')->after('numero_celular');
            $table->string('direccion')->after('ciudad');
            $table->string('correo_electronico')->after('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('docentes', function (Blueprint $table) {
            //
        });
    }
};
