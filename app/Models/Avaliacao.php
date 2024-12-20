<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    
    protected $table = 'avaliacoes';

    protected $fillable = [
        'produto_embalagem_id',
        'data_avaliacao',
        'inspecao_visual',
        'defeitos_esteticos_percentual',
        'resultados_testes_dimensoes',
        'teste_resistencia_compressao',
        'impacto_queda',
        'teste_estanqueidade',
        'testes_material',
        'conclusao_geral',
        'recomendacoes_melhoria'
    ];

    public function produtoEmbalagem()
    {
        return $this->belongsTo(ProdutoEmbalagem::class);
    }

    public function laudo()
    {
        return $this->hasOne(Laudo::class);
    }
}
