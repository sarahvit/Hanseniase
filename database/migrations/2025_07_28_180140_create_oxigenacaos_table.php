<?php

use App\Models\RuidosAdventicio;
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
        Schema::create('oxigenacaos', function (Blueprint $table) {
            $table->id();
            $table->boolean('temp_capilar');
            $table->string('freq_respiratoria');
            $table->string('SatO2');
            $table->integer('MMVV');
            $table->foreignIdFor(RuidosAdventicio::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oxigenacaos');
    }
};
