<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');

            $table->unsignedBigInteger('id_evento'); // Clave foránea
            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade'); // Clave foránea
            
            $table->unsignedBigInteger('id_cliente'); // Clave foránea
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade'); // Clave foránea
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
