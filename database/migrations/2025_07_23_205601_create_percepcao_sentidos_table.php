<?php

use App\Models\AnaliseTato;
use App\Models\Fala;
use App\Models\Nariz;
use App\Models\Ouvido;
use App\Models\PercepcaoSentidos;
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
        Schema::create('percepcao_sentidos', function (Blueprint $table) {
            $table->id();
            $table->boolean('olhos');
            $table->timestamps();
        });
        Schema::create('percepcao_fala', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PercepcaoSentidos::class);
            $table->foreignIdFor(Fala::class);
            $table->timestamps();
        });
        Schema::create('percepcao_ouvidos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PercepcaoSentidos::class);
            $table->foreignIdFor(Ouvido::class);
            $table->timestamps();
        });
        Schema::create('percepcao_narizs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PercepcaoSentidos::class);
            $table->foreignIdFor(Nariz::class);
            $table->timestamps();
        });
        Schema::create('percepcao_tato', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PercepcaoSentidos::class);
            $table->foreignIdFor(AnaliseTato::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('percepcao_sentidos');
        Schema::dropIfExists('percepcao_ouvidos');
        Schema::dropIfExists('percepcao_narizs');
        Schema::dropIfExists('percepcao_tato');
    }
};
