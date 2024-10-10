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
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id'); // Chave estrangeira
            $table->unsignedBigInteger('professores_id'); // Chave estrangeira
            $table->string('Nº SALA');
            $table->string('Tipo SALA');
            $table->string('Capacidade');
            $table->timestamps();

            // $table->foreign('alunos_id')->references('id')->on('alunos')->onDelete('cascade');
        
            // $table->foreign('professores_id')->references('id')->on('professores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salas');
    }
};
