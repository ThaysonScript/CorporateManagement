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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('fornecedorNome');
            $table->string('email')->unique();
            $table->string('fornecedorEmpresa')->nullable();

            $table->string('telefone')->nullable();
            $table->string('endereco');
           
            $table->string('pais')->default('Brasil');
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            
            $table->enum('tipo', ['pessoa_fisica', 'pessoa_juridica']);

            $table->string('servicoPrestado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedors');
    }
};
