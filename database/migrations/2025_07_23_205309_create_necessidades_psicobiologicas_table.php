<?php

use App\Models\Abrigo;
use App\Models\AvaliacaoNeurologica;
use App\Models\Eliminacoes;
use App\Models\ExerciciosAutocuidado;
use App\Models\Hidratacao;
use App\Models\Locomocao;
use App\Models\Nutricao;
use App\Models\Oxigenacao;
use App\Models\PercepcaoSentidos;
use App\Models\RegulacaoHormonal;
use App\Models\RegulacaoNeurologica;
use App\Models\RegulacaoTermica;
use App\Models\Sexualidade;
use App\Models\Sono;
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
        Schema::create('necessidades_psicobiologicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId(RegulacaoNeurologica::class);
            $table->foreignId(PercepcaoSentidos::class);
            $table->foreignId(Hidratacao::class);
            $table->foreignId(Nutricao::class);
            $table->foreignId(Sono::class);
            $table->foreignId(ExerciciosAutocuidado::class); 
            $table->foreignId(Abrigo::class); 
            $table->foreignId(RegulacaoHormonal::class);   
            $table->foreignId(Oxigenacao::class); 
            $table->foreignId(RegulacaoTermica::class);
            $table->foreignId(Eliminacoes::class);
            $table->foreignId(Sexualidade::class);
            $table->foreignId(Locomocao::class);
            $table->foreignId(AvaliacaoNeurologica::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('necessidades_psicobiologicas');
    }
};
