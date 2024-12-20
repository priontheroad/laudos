@extends('layouts.app')

@section('content')
    <h1>Editar Empresa</h1>

    <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $empresa->nome }}" required>
        </div>
        <div class="form-group">
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj" class="form-control" value="{{ $empresa->cnpj }}" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar alterações</button>
    </form>
@endsection
