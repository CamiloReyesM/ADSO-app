<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre'); // Otra columna
            $table->unsignedBigInteger('id_cargo'); // Clave foránea
            $table->foreign('id_cargo')->references('id')->on('cargos')->onDelete('cascade'); // Clave foránea

            $table->timestamps(); // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
