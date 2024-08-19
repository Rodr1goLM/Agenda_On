@extends('templates.template')

@section('content')

<h2>Editar Unidade</h2>

<div class="col-8 m-auto">
    <form action="{{ route('unidade.update', $unidade->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $unidade->nome }}" required>
        </div>
        <div class="form-group">
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" class="form-control" value="{{ $unidade->logradouro }}" required>
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" value="{{ $unidade->bairro }}" required>
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" name="numero" class="form-control" value="{{ $unidade->numero }}" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" value="{{ $unidade->cidade }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" value="{{ $unidade->estado }}" required>
        </div>
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" name="pais" class="form