<?php

use App\Models\Beneficios;
use App\Models\Endereco;
use App\Models\EstadoCivil;
use App\Models\Etnia;
use App\Models\Historico;
use App\Models\OrientacaoSex;
use App\Models\Reside;
use App\Models\UnidadeSaude;
use App\Models\User;
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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->char('cpf')->unique();
            $table->string('nome');
            $table->string('prontuario');
            $table->date('data_nasc');
            $table->string('email')->unique();
            $table->boolean('sexo');
            $table->foreignIdFor(OrientacaoSex::class);
            $table->foreignIdFor(EstadoCivil::class);
            $table->foreignIdFor(Etnia::class);
            $table->foreignIdFor(Endereco::class);
            $table->string('ocupacao');
            $table->decimal('renda_familiar');
            $table->foreignIdFor(Beneficios::class);
            $table->foreignIdFor(Reside::class);
            $table->tinyInteger('num_pss_casa');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Historico::class)->nullable();
            $table->foreignIdFor(UnidadeSaude::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
