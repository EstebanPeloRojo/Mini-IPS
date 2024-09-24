<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('Tipo_Doc');
            $table->integer('Num_Doc');
            $table->date('fecha_nacimiento');
            $table->string('Email');
            $table->string('tipo_sangre');
            $table->date('fecha_exp_doc');
            $table->string('alergias');
            $table->string('sexo');
            $table->string('genero');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente');
    }
};
