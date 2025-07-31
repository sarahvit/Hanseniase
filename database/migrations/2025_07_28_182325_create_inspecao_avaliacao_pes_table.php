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
        Schema::create('inspecao_avaliacao_pes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_inpecao_pes_dir')
            ->constrained('class_inspecao_pes')
            ->onDelete('cascade');
            $table->foreignId('class_inp_pes_esq')
            ->constrained('class_inspecao_pes')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspecao_avaliacao_pes');
    }
};
