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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 6);
            $table->string('marca', 50);
            $table->date('modelo_anio');
            $table->string('tipo_combustible', 20);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->unsignedBigInteger('propietario_id')->nullable();

            $table->foreign('propietario_id')
                ->references('id')
                ->on('propietarios')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
