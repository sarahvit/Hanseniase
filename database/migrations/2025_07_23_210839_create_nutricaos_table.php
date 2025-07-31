<?php

use App\Models\Nutricao;
use App\Models\PrincipalRefeicao;
use App\Models\Refeicao;
use App\Models\RestricoesAlimentares;
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
        Schema::create('refeicoesdia_nutricao', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Nutricao::class);
            $table->foreignIdFor(Refeicao::class);
            $table->timestamps();
        });
        Schema::create('nutricao_principais', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Nutricao::class);
            $table->foreignIdFor(PrincipalRefeicao::class);
            $table->timestamps();
        });
        Schema::create('nutricao_restricoes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Nutricao::class);
            $table->foreignIdFor(RestricoesAlimentares::class);
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutricaos');
        Schema::dropIfExists('refeicoesdia_nutricao');
        Schema::dropIfExists('nutricao_principais');
        Schema::dropIfExists('nutricao_restricoes');
    }
};
