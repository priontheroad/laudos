<?php

namespace App\Http\Controllers;

use App\Models\ProdutoEmbalagem;
use Illuminate\Http\Request;

class ProdutoEmbalagemController extends Controller
{
    public function index()
    {
        $produtos = ProdutoEmbalagem::all();
        return view('produto.index', compact('produtos'));
    }

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tipo_embalagem' => 'required|string|max:100',
            'material_utilizado' => 'required|string|max:100',
            'peso' => 'required|numeric',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric',
            'profundidade' => 'required|numeric',
            'finalidade' => 'required|string|max:255',
            'marca_identificacao' => 'required|string|max:255',
        ]);

        ProdutoEmbalagem::create($request->all());

        return redirect()->route('produto.index')->with('success', 'Produto/Embalagem cadastrada com sucesso!');
    }

    public function show(ProdutoEmbalagem $produtoEmbalagem)
    {
        return view('produto.show', compact('produtoEmbalagem'));
    }

    public function edit(ProdutoEmbalagem $produtoEmbalagem)
    {
        return view('produto.edit', compact('produtoEmbalagem'));
    }

    public function update(Request $request, ProdutoEmbalagem $produtoEmbalagem)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tipo_embalagem' => 'required|string|max:100',
            'material_utilizado' => 'required|string|max:100',
            'peso' => 'required|numeric',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric',
            'profundidade' => 'required|numeric',
            'finalidade' => 'required|string|max:255',
            'marca_identificacao' => 'required|string|max:255',
        ]);

        $produtoEmbalagem->update($request->all());

        return redirect()->route('produto.index')->with('success', 'Produto/Embalagem atualizada com sucesso!');
    }

    public function destroy(ProdutoEmbalagem $produtoEmbalagem)
    {
        $produtoEmbalagem->delete();
        return redirect()->route('produto.index')->with('success', 'Produto/Embalagem removida com sucesso!');
    }
}
