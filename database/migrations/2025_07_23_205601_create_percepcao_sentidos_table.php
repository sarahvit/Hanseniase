<?php

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
            $table->timestamps();
        });
        Schema::create('percepcao_ouvidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('percepcao_narizs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('percepcao_tato', function (Blueprint $table) {
            $table->id();
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
