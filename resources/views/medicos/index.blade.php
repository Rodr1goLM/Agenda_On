@extends('templates.template')

@section('content')

<h2>Lista de Médicos</h2>

<div class="col-8 m-auto">
    <a href="{{ route('medico.create') }}" class="btn btn-success mb-3">Adicionar Médico</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <form action="{{ route('medico.search') }}" method="GET" class="mb-3">
        <input type="text" name="query" class="form-control" placeholder="Buscar médicos...">
        <button type="submit" class="btn btn-primary mt-2">Buscar</button>
    </form>

    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Registro</th>
                <th scope="col">Especialização</th>
                <th scope="col">Unidade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
                <tr>
                    <th scope="row">
                        <a href="{{ route('medico.show', $medico->id) }}">
                            {{ $medico->id }}
                        </a>
                    </th>
                    <td>{{ $medico->nome }}</td>
                    <td>{{ $medico->registro }}</td>
                    <td>{{ $medico->especializacao }}</td>
                    <td>{{ $medico->relUnidade->nome }}</td>
                    <td>
                        <a href="{{ route('medico.edit', $medico->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('medico.destroy', $medico->id) }}" method="POST" style="display:inline;">
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
