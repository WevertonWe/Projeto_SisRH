@extends('layouts.default')

@section('title', 'Cargos')

@section('conteudo')
<h1>Cargos</h1>
<a href="{{route('cargos.create')}}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>descricao</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cargos as $cargo)
        <tr>
            <td class="align-middle">{{$cargo->id}}</td>
            <td class="align-middle">{{$cargo->descricao}}</td>
            <td class="align-middle"><button type="button" class="btn btn-success m-2"><i class="bi bi-person-fill"></i></button><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger m-2"><i class="bi bi-trash"></i></button></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection