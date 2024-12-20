<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laudo extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa_id',
        'avaliacao_id',
        'conteudo_laudo',
        'data_geracao_laudo'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function avaliacao()
    {
        return $this->belongsTo(Avaliacao::class);
    }
}
