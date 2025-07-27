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
        Schema::create('nutricaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('refeicoes_nutricao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('nutricao_principais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutricaos');
        Schema::dropIfExists('refeicoes_nutricao');
        Schema::dropIfExists('nutricao_principais');
    }
};
