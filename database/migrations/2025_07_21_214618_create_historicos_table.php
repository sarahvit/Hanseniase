<?php

use App\Models\Comorbidade;
use App\Models\FormasClinica;
use App\Models\Historico;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FormasClinica::class);
            $table->date('data_diagnostico')->nullable();
            $table->boolean('classificacao_op')->nullable();
            $table->tinyInteger('tabagista_cigarros')->nullable();
            $table->date('elitista_ano')->nullable();
            $table->timestamps();
        });
        Schema::create('comorbidades_historico', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Historico::class);
            $table->foreignIdFor(Comorbidade::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicos');
        Schema::dropIfExists('comorbidades_historico');
    }
};
