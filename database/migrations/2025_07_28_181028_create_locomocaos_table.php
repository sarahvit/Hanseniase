<?php

use App\Models\Locomocao;
use App\Models\TipoLocomocao;
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
        Schema::create('locomocaos', function (Blueprint $table) {
            $table->id();
            $table->boolean('risco_queda');
            $table->timestamps();
        });
        Schema::create('loc_tipos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Locomocao::class);
            $table->foreignIdFor(TipoLocomocao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locomocaos');
    }
};
