<?php

use App\Models\ComportamentoRegulacaoNeuro;
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
        Schema::create('regulacao_neurologicas', function (Blueprint $table) {
            $table->id();
             $table->boolean('orientado');
            $table->foreignIdFor(ComportamentoRegulacaoNeuro::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regulacao_neurologicas');
    }
};
