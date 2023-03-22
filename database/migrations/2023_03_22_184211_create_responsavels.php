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
        Schema::create('responsavels', function (Blueprint $table) {
            $table->id();
            $table->string('responsavel',50);
            $table->date('nascResponsavel');
            $table->string('estadoCivil',20);
            $table->string('tipoCasamento',20);
            $table->string('padrinho',20);
            $table->string('madrinha',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsavels');
    }
};
