@extends('templates.template')

@section('content')

<h2>Adicionar Unidade</h2>

<div class="col-8 m-auto">
    <form action="{{ route('unidade.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" name="numero" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" name="pais" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>

@endsection
