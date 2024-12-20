<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('produto_embalagens', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->string('tipo_embalagem');
            $table->string('material_utilizado');
            $table->decimal('peso', 8, 2);
            $table->decimal('largura', 8, 2);
            $table->decimal('altura', 8, 2);
            $table->decimal('profundidade', 8, 2);
            $table->text('finalidade');
            $table->string('marca_identificacao');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_embalagens');
    }
};
