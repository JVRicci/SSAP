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
        Schema::create('catequizandos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idContato')->references('id')->on('contatos');
            $table->foreignId('idEndereco')->references('id')->on('enderecos');
            $table->foreignId('idResponsavel')->references('id')->on('responsavels');
            $table->integer('idTurma');
            $table->string('nome', 30);
            $table->date('nascimento');
            $table->string('ativo', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catequizandos');
    }
};
