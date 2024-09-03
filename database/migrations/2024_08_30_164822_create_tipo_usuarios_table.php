<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre'); // Otra columna
            $table->unsignedBigInteger('id_area'); // Clave foránea
            $table->foreign('id_area')->references('id')->on('areas')->onDelete('cascade'); // Clave foránea

            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_usuarios');
    }
};
