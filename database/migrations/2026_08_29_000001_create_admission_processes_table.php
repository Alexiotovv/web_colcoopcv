<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admission_processes', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->boolean('active')->default(false);
            $table->string('badge_dates')->nullable();
            $table->string('recepcion_grados')->nullable();
            $table->string('recepcion_fecha')->nullable();
            $table->string('recepcion_lugar')->nullable();
            $table->string('etapa1_fecha')->nullable();
            $table->string('etapa2_fecha')->nullable();
            $table->string('etapa3_fecha')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admission_processes');
    }
};
