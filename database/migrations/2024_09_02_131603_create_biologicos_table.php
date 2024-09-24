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
        Schema::create('biologicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_bio');
            $table->string('cod_bio');
            $table->string('cantidad');
            $table->string('tipo_bio');
            $table->float('precio');
            $table->string('presentacion');
            $table->string('marca');
            $table->string('laboratorio');
            $table->date('fecha_expiracion');
            $table->integer('lote');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biologicos');
    }
};
