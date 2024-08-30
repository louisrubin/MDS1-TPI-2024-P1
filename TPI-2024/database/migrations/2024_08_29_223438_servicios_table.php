<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descripcion')->nullable();
            $table->double('precio')->nullable();
            $table->boolean('disponibilidad')->default(true); // valor por defecto
            $table->timestamps();
        });
        
        $fechaDesarrollo = new DateTime('2024-08-29 20:10:00');
        // Insertar registro id 1 -> aplicacion 'Spa Felicidad'
        DB::table('servicios')->insert([
            'name' => 'tpi-mds1-p1',
            'descripcion' => 'TPI Metodología de Sistemas 1 - Parte 1. (No estoy cursando, hago este proyecto por cuenta propia e individual)',
            'precio' => 99999.00,
            'disponibilidad' => false,
            'created_at' => $fechaDesarrollo,   // fecha y hora en que estoy 
            'updated_at' => $fechaDesarrollo,   // desarrollando esto
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar registros dependientes antes de eliminar la tabla
        //DB::table('comentarios')->whereNotNull('service_id')->delete();

        Schema::dropIfExists('servicios');   // esquema creado en up()
    }
};
