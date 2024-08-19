@extends('templates.template')

@section('content')

<h2>Lista de Unidades</h2>

<div class="col-8 m-auto">
    <a href="{{ route('unidade.create') }}" class="btn btn-success mb-3">Adicionar Unidade</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Bairro</th>
                <th scope="col">Número</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">País</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unidades as $unidade)
                <tr>
                    <th scope="row">{{ $unidade->id }}</th>
                    <td>{{ $unidade->nome }}</td>
                    <td>{{ $unidade->logradouro }}</td>
                    <td>{{ $unidade->bairro }}</td>
                    <td>{{ $unidade->numero }}</td>
                    <td>{{ $unidade->cidade }}</td>
                    <td>{{ $unidade->estado }}</td>
                    <td>{{ $unidade->pais }}</td>
                    <td>
                        <a href="{{ route('unidade.edit', $unidade->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('unidade.destroy', $unidade->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
