<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admission_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admission_process_id')->constrained()->cascadeOnDelete();
            $table->enum('etapa', ['etapa1', 'etapa2', 'etapa3']);
            $table->string('label');
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->string('badge_text')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admission_documents');
    }
};
