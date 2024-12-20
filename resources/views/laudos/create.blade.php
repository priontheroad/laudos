@extends('layouts.app')

@section('title', 'Novo Laudo')

@section('content')
    <h1 class="mb-4">Cadastrar Novo Laudo</h1>

    <form action="{{ route('laudos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_empresa" class="form-label">Empresa</label>
            <select name="id_empresa" id="id_empresa" class="form-control" required>
                <option value="">Selecione uma empresa</option>
                @foreach($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="data_geracao" class="form-label">Data de Geração</label>
            <input type="date" name="data_geracao" id="data_geracao" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="detalhes" class="form-label">Detalhes</label>
            <textarea name="detalhes" id="detalhes" rows="5" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
