@extends('templates.page')

@section('header')

<h3>Adicionar Produto</h3>

<a class="btn btn-primary" href="{{route('produto.create')}}"><i class="icon-plus"></i> Adicionar Produto</a>

    <br>
    <br>


<h3> Pesquisar Produto</h3>
<form class="form form-inline" method="POST" action="{{route('produto.search')}}">
    {!! csrf_field() !!}

<label for="params"> Pesquisar por</label>
    <select class="form-control" name="params">
        <option value={{"id"}}>ID</option>
        <option value={{"nome"}}>Nome</option>
    </select>

    <input type=text class="form-control" name="field" placeholder="Keyword" required></input>

    <button class="btn btn-primary form-control" type="submit"><i class="icon-search"></i>Pesquisar</button>
</form> <br><br>

@endsection('header')

@section('content')


    @if(isset($produtos) && count($produtos) > 0)

    <h3>Lista de Produtos</h3>


    <table class="table">
    <thead class="table-inverse">
        <tr>
            <th class="col">ID</th>
            <th class="col">Nome</th>
            <th class="col">Quantidade</th>
            <th class="col">Preco</th>
            <th class="col">Descricao</th>
            <th class="col">Validade (y-m-d)</th>
            <th class="col">Accoes</th>

        </tr>
    </thead>

    <tbody class="table-striped table-bordered">
        @foreach ($produtos as $item)

        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->nome}}</td>
            <td>{{ $item->quantidade}}</td>
            <td>{{ $item->preco}}</td>
            <td>{{ $item->descricao}}</td>
            <td>{{ $item->validade}}</td>
            <td >
                <a href="#" class="nav-item"><i class="icon-edit "></i></a>
                <a href="#" class="nav-item"><i class="icon-trash"></i></a>

            </td>

        </tr>
        @endforeach
    </tbody>

    </table>

    @else

    <div class='alert' role='alert'>
        <h1 style="color:red"> Nenhum Resultado foi Encontrado</h1>
    </div>

    @endif

@endsection('content')
