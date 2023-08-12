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
            $table->string('servicoPrestado');
            $table->string('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->enum('tipo', ['pessoa_fisica', 'pessoa_juridica']);
           
            $table->string('pais')->default('Brasil');
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('estoque_id')->constrained('estoques')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('categoria_id')->nullable()->constrained('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('produto_id')->nullable()->constrained('produtos')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedores');
    }
};
