@extends('layouts.default')

@section('title', 'Cadastrar Funcionário')

@section('conteudo')
<div class="container-fluid shadow bg-white p-4">
    <h1 class="mb-5">Cadastrar Cargos</h1>

    <div class="container">
        <label for="nome" class="form-label fw-semibold">Descrição</label>
        <input type="text" name="descricao" class="form-control form-control-lg bg-dark bg-opacity-10 mb-4" value="">
    </div>
    <input class="btn btn-primary" type="submit" value="Cadastrar">
    <input class="btn btn-danger" type="reset" value="Cancelar">
</div>
@endsection