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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id'); // Llave foránea para 'usuarios'
            $table->unsignedBigInteger('service_id'); // Llave foránea para 'services'
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');

            $table->timestamps();   // created_at, update_at

            // Definición de las llaves foráneas
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(('turnos'));
    }
};
