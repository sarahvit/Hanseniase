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
        Schema::create('terapeuticas', function (Blueprint $table) {
            $table->id();
            $table->boolean('tratamento');
            $table->tinyInteger('medicacao');
            $table->boolean('reacoes_hanseniase');
            $table->tinyInteger('medicamentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terapeuticas');
    }
};
