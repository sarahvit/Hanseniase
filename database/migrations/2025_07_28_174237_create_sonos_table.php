<?php

use App\Models\ProblemasSono;
use App\Models\QualidadeSono;
use App\Models\Sono;
use App\Models\SonoMedicamentos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sonos', function (Blueprint $table) {
            $table->id();
            $table->time('horario_dormir');
            $table->boolean('dorme_durante_dia');
            $table->integer('quanto_tempo');
            $table->foreignIdFor(QualidadeSono::class);
            $table->timestamps();
        });

        Schema::create('sonoproblemas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sono::class);
            $table->foreignIdFor(ProblemasSono::class);
            $table->timestamps();
        });
        Schema::create('medicamentos_sono', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sono::class);
            $table->foreignIdFor(SonoMedicamentos::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sonos');
        Schema::dropIfExists('sonoproblemas');
    }
};
