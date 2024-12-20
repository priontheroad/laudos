<?php

namespace App\Http\Controllers;

use App\Models\Laudo;
use App\Models\Avaliacao;
use App\Models\Empresa;
use Illuminate\Http\Request;

class LaudoGeradoController extends Controller
{    
    public function index()
    {
        $laudos = Laudo::paginate(10);

        return view('laudos.index', compact('laudos'));
    }

    public function create()
    {
        $avaliacoes = Avaliacao::all();
        $empresas = Empresa::all();
        return view('laudos.create', compact('avaliacoes', 'empresas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_empresa' => 'required|exists:empresas,id',
            'data_geracao' => 'required|date',
            'detalhes' => 'nullable|string',
        ]);
    
        Laudo::create($validated);
    
        return redirect()->route('laudos.index')->with('success', 'Laudo cadastrado com sucesso!');
    }
}
