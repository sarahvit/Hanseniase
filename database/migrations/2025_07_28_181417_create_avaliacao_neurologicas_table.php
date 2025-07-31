<?php

use App\Models\FaceNariz;
use App\Models\FaceOlho;
use App\Models\InspecaoAvaliacaoMaos;
use App\Models\InspecaoAvaliacaoPes;
use App\Models\MembrosInferioresForca;
use App\Models\MembrosInferioresQueixas;
use App\Models\MembrosSuperioresForca;
use App\Models\MembrosSuperioresQueixas;
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
        Schema::create('avaliacao_neurologicas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FaceNariz::class);
            $table->foreignIdFor(FaceOlho::class);
            $table->foreignIdFor(MembrosSuperioresQueixas::class);
            $table->foreignIdFor(MembrosSuperioresForca::class);
            $table->foreignIdFor(InspecaoAvaliacaoMaos::class);
            $table->foreignIdFor(MembrosInferioresQueixas::class);
            $table->foreignIdFor(MembrosInferioresForca::class);
            $table->foreignIdFor(InspecaoAvaliacaoPes::class);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacao_neurologicas');
    }
};
