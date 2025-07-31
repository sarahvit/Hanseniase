<?php

use App\Models\AmorAceitacao;
use App\Models\Comunicacao;
use App\Models\NecessidadesPsicosociais;
use App\Models\Recreacao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('necessidades_psicosociais', function (Blueprint $table) {
            $table->id();
            $table->boolean('investigacao_contato');
            $table->foreignIdFor(AmorAceitacao::class);
            $table->foreignIdFor(Comunicacao::class);
            $table->timestamps();
        });
        Schema::create('recreacao_necessidades', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(NecessidadesPsicosociais::class);
            $table->foreignIdFor(Recreacao::class);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('necessidades_psicosociais');
        Schema::dropIfExists('recreacao_necessidades');
    }
};
