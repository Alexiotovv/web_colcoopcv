<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('admission_processes', function (Blueprint $table) {
            $table->dropColumn([
                'recepcion_grados',
                'recepcion_fecha',
                'recepcion_lugar',
                'etapa1_fecha',
                'etapa2_fecha',
                'etapa3_fecha',
            ]);

            $table->string('anexo_conformidad_url')->nullable();
            $table->string('ficha_inscripcion_url')->nullable();
            $table->string('contrato_prestacion_url')->nullable();
            $table->string('ficha_postulante_url')->nullable();
            $table->string('disposiciones_pdf_url')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('admission_processes', function (Blueprint $table) {
            $table->dropColumn([
                'anexo_conformidad_url',
                'ficha_inscripcion_url',
                'contrato_prestacion_url',
                'ficha_postulante_url',
                'disposiciones_pdf_url',
            ]);

            $table->string('recepcion_grados')->nullable();
            $table->string('recepcion_fecha')->nullable();
            $table->string('recepcion_lugar')->nullable();
            $table->string('etapa1_fecha')->nullable();
            $table->string('etapa2_fecha')->nullable();
            $table->string('etapa3_fecha')->nullable();
        });
    }
};
