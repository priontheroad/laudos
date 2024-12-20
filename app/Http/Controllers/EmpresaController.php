<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    public function create()
    {
        return view('empresas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj' => 'required|string|max:14|unique:empresas',
            'endereco' => 'required|string',
            'responsavel_tecnico' => 'required|string',
            'cargo_responsavel' => 'required|string',
            'telefone' => 'required|string',
            'email' => 'required|email',
        ]);

        Empresa::create($request->all());

        return redirect()->route('empresas.index')->with('success', 'Empresa cadastrada com sucesso!');
    }

    public function show(Empresa $empresa)
    {
        return view('empresa.show', compact('empresa'));
    }

    public function edit(Empresa $empresa)
    {
        return view('empresa.edit', compact('empresa'));
    }

    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj' => 'required|string|max:14|unique:empresas,cnpj,' . $empresa->id,
            'endereco' => 'required|string',
            'responsavel_tecnico' => 'required|string',
            'cargo_responsavel' => 'required|string',
            'telefone' => 'required|string',
            'email' => 'required|email',
        ]);

        $empresa->update($request->all());

        return redirect()->route('empresa.index')->with('success', 'Empresa atualizada com sucesso!');
    }

    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->route('empresa.index')->with('success', 'Empresa removida com sucesso!');
    }
}
