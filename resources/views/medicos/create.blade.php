@extends('templates.template')

@section('content')

<h2>Adicionar Médico</h2>

<div class="col-8 m-auto">
    <form action="{{ route('medico.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="registro">Registro</label>
            <input type="text" name="registro" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="especializacao">Especialização</label>
            <input type="text" name="especializacao" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="unidade">Unidade</label>
            <input type="text" name="unidade" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>

@endsection
