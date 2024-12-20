<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 
        'cnpj', 
        'endereco', 
        'responsavel_tecnico', 
        'cargo_responsavel', 
        'telefone', 
        'email'
    ];

    public function produtoEmbalaos()
    {
        return $this->hasMany(ProdutoEmbalagem::class);
    }
}

