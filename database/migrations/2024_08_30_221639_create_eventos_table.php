<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');

            $table->unsignedBigInteger('id_cliente'); // Clave foránea
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade'); // Clave foránea

            $table->unsignedBigInteger('id_clase_evento'); // Clave foránea
            $table->foreign('id_clase_evento')->references('id')->on('clase_eventos')->onDelete('cascade'); // Clave foránea

            $table->unsignedBigInteger('id_usuario'); // Clave foránea
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade'); // Clave foránea
            $table->string('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
