<?php

use App\Models\DisturbiosSexuais;
use App\Models\Sexualidade;
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
        Schema::create('sexualidades', function (Blueprint $table) {
            $table->id();
            $table->boolean('vida_sex');
            $table->timestamps();
        });
        Schema::create('disturbios_vidasex', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sexualidade::class);
            $table->foreignIdFor(DisturbiosSexuais::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sexualidades');
        Schema::dropIfExists('disturbios_vidasex');
    }
};
