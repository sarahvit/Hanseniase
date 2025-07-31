<?php

use App\Models\NecessidadesPsicobiologicas;
use App\Models\NecessidadesPsicoespirituais;
use App\Models\NecessidadesPsicosociais;
use App\Models\Paciente;
use App\Models\Terapeutica;
use App\Models\UnidadeSaude;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questionarios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(UnidadeSaude::class);
            $table->foreignIdFor(NecessidadesPsicobiologicas::class);
            $table->foreignIdFor(NecessidadesPsicosociais::class);
            $table->foreignIdFor(NecessidadesPsicoespirituais::class);
            $table->foreignIdFor(Paciente::class)->constrained()->onDelete('cascade');
            $table->text('impressoes_enfermeiro')->nullable();
            $table->foreignIdFor(Terapeutica::class);

            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionarios');
    }
};
