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
        Schema::create('exercicios_autocuidados', function (Blueprint $table) {
            $table->id();
            $table->string('limitacao_autocuidado');
            $table->boolean('alongamentos');
            $table->boolean('estimulcao_sensorial');
            $table->string('restricao_atividade');
            $table->string('atividade_fisica');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercicios_autocuidados');
    }
};
