<?php

use App\Models\AmorAceitacao;
use App\Models\Emocionais;
use App\Models\OpnioesSi;
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
        Schema::create('amor_aceitacaos', function (Blueprint $table) {
            $table->id();
            $table->boolean('acompanhado');
            $table->boolean('preconceito');
            $table->boolean('qualidade_vida');
            $table->timestamps();
        });
         Schema::create('emocionais_cuidado', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AmorAceitacao::class);
            $table->foreignIdFor(Emocionais::class);
            $table->timestamps();
        });
         Schema::create('opnioes_amor', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AmorAceitacao::class);
            $table->foreignIdFor(OpnioesSi::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amor_aceitacaos');
        Schema::dropIfExists('emocionais_cuidado');
        Schema::dropIfExists('opnioes_amor');
    }
};
