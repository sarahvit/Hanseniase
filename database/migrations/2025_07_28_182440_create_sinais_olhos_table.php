<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sinais_olhos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_sinais_olhos_dir')
                ->constrained('class_sinais_olhos')
                ->onDelete('cascade');
            $table->foreignId('class_sinais_olhos_esq')
                ->constrained('class_sinais_olhos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinais_olhos');
    }
};
