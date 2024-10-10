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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id'); // Chave estrangeira
            $table->foreignId('professor_id'); // Chave estrangeira
            $table->integer('CEP');
            $table->string('Cidade');
            $table->integer('Número');
            $table->string('Bairro');
            $table->timestamps();

            // $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
        
            // $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos', function (Blueprint $table) {
            // Remove a chave estrangeira e a coluna aluno_id
            $table->dropForeign(['aluno_id']);
            $table->dropColumn('aluno_id');
        });
        
    }
};
