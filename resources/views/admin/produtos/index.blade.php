@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li class="active">Lista de Produtos</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
        <h2 class="center">Lista de Produtos</h2>
            <ul class="actions">
                <li>
                    @can('usuario_adicionar')
                        <div class="row">
                            <a class="btn btn-primary" href="{{ route('admin.produtos.adicionar') }}">Adicionar</a>
                        </div>
                    @endcan
                </li>
            </ul>
        </div>
        <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Imagem</th>
                    <th>Ativo?</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>{{ $registro->preco }}</td>
                        <td><img width="100" src="{{asset($registro->imagem)}}"></td>
                        <td>{{ $registro->ativo }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.produtos.editar', $registro->id) }}">Editar</a>
                            <a class="btn btn-danger" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.produtos.deletar', $registro->id) }}'}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection