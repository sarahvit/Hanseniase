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
        Schema::create('inspecao_avaliacao_maos', function (Blueprint $table) {
            $table->id();


            $table->foreignId('classificacao_mao_inspecao_dir')
                ->constrained('class_inspecao_avaliacao_maos')
                ->onDelete('cascade');
            $table->foreignId('classificacao_mao_inpecao_esq')
                ->constrained('class_inspecao_avaliacao_maos')
                ->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspecao_avaliacao_maos');
    }
};
