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
        Schema::create('categoria_produtos', function (Blueprint $table) {
            $table->id();
            $table->string('tituloCategoriaProduto');
            $table->text('descricaoCategoriaProduto')->nullable();
            $table->string('fornecedorCategoriaProduto')->nullable();

            
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreignId('categoria_estoque_id')->constrained('categoria_estoques', 'id')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_produtos');
    }
};
