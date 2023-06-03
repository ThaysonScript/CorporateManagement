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
        Schema::create('categoria_estoques', function (Blueprint $table) {
            $table->id();
            $table->string('tituloCategoriaEstoque');
            $table->text('descricaoCategoriaEstoque')->nullable();

            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('categoria_produto_id')->constrained('categoria_produtos', 'id')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_estoques');
    }
};
