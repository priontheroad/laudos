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
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_embalagem_id')->constrained('produto_embalagens');
            $table->date('data_avaliacao');
            $table->text('inspecao_visual');
            $table->decimal('defeitos_esteticos_percentual', 5, 2);
            $table->text('resultados_testes_dimensoes');
            $table->text('teste_resistencia_compressao');
            $table->text('impacto_queda');
            $table->text('teste_estanqueidade');
            $table->text('testes_material');
            $table->text('conclusao_geral');
            $table->text('recomendacoes_melhoria');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacoes');
    }
};
