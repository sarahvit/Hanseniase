<?php

use App\Models\Eliminacoes;
use App\Models\Laxante;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eliminacoes', function (Blueprint $table) {
            $table->id();
            $table->string('eliminacao_urinaria_freq');
            $table->string('eliminacao_urinaria_coloracao');
            $table->boolean('odor');
            $table->boolean('dor_urinar');
            $table->boolean('Incontinencia_eliminação');
            $table->string('eliminacao_trato_freq');
            $table->string('eliminacao_trato_coloracao');
            $table->boolean('dor_trato');
            $table->boolean('incontinencia_trato');
            $table->boolean('constipacao');
            $table->boolean('diarreia');
            $table->string('dispositivo_externo');
            $table->timestamps();
        });
        Schema::create('eliminacoes_laxante', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Eliminacoes::class);
            $table->foreignIdFor(Laxante::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eliminacoes');
    }
};
