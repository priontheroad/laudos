@extends('layouts.app')

@section('content')
    <h1>Empresas</h1>
    <a href="{{ route('empresas.create') }}" class="btn btn-primary">Criar nova empresa</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->nome }}</td>
                    <td>{{ $empresa->cnpj }}</td>
                    <td>
                        <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
