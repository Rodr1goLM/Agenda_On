@extends('templates.template')

@section('content')

<h2>Editar Médico</h2>

<div class="col-8 m-auto">
    <form action="{{ route('medico.update', $medico->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $medico->nome }}" required>
        </div>
        <div class="form-group">
            <label for="registro">Registro</label>
            <input type="text" name="registro" class="form-control" value="{{ $medico->registro }}" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control" value="{{ $medico->cpf }}" required>
        </div>
        <div class="form-group">
            <label for="especializacao">Especialização</label>
            <input type="text" name="especializacao" class="form-control" value="{{ $medico->especializacao }}" required>
        </div>
        <div class="form-group">
            <label for="unidade">Unidade</label>
            <input type="text" name="unidade" class="form-control" value="{{ $medico->unidade }}" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>

@endsection
