@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Relação de Laudos Gerados</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Empresa</th>
                    <th>Produto/Embalagem</th>
                    <th>Status</th>
                    <th>Data de Criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($laudos as $laudo)
                    <tr>
                        <td>{{ $laudo->id }}</td>
                        <td>{{ $laudo->empresa->nome }}</td>
                        <td>{{ $laudo->produtoEmbalagem->nome }}</td>
                        <td>{{ $laudo->status }}</td>
                        <td>{{ $laudo->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('laudos.show', $laudo->id) }}" class="btn btn-primary btn-sm">Visualizar</a>
                            <a href="{{ route('laudos.edit', $laudo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('laudos.destroy', $laudo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Nenhum laudo encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Paginação -->
        <div class="d-flex justify-content-center">
            {{ $laudos->links() }}
        </div>
    </div>
@endsection
