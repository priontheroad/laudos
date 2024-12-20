<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\ProdutoEmbalagem;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function create()
    {
        $produtos = ProdutoEmbalagem::all();
        return view('avaliacao.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_embalagem' => 'required|exists:produto_embalagens,id',
            'inspecao_visual' => 'nullable|string',
            'defeitos_esteticos' => 'nullable|string',
            'teste_dimensoes' => 'nullable|string',
            'teste_resistencia' => 'nullable|string',
            'impacto_queda' => 'nullable|string',
            'teste_estanqueidade' => 'nullable|string',
            'testes_material' => 'nullable|string',
            'conclusao' => 'nullable|string',
            'recomendacoes' => 'nullable|string',
        ]);

        Avaliacao::create($request->all());

        return redirect()->route('avaliacao.index')->with('success', 'Avaliação cadastrada com sucesso!');
    }
}
