@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cadastrar Empresa</h2>
    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="responsavel_tecnico" class="form-label">Responsável Técnico</label>
            <input type="text" name="responsavel_tecnico" id="responsavel_tecnico" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cargo_responsavel" class="form-label">Cargo do Responsável</label>
            <input type="text" name="cargo_responsavel" id="cargo_responsavel" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
