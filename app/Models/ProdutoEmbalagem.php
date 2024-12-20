<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoEmbalagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_produto', 
        'tipo_embalagem',
        'material_utilizado', 
        'peso', 
        'largura', 
        'altura', 
        'profundidade', 
        'finalidade', 
        'marca_identificacao'
    ];

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }
}

