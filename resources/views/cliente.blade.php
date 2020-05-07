@extends('templates.page')

@section('title','Cliente')
@section('header')

<h3>Adicionar Cliente</h3>

<a class="btn btn-primary" href="{{route('cliente.create')}}"><i class="icon-plus"></i> Adicionar Cliente</a>

    <br>
    <br>


<h3> Pesquisar Cliente</h3>
<form class="form form-inline" method="POST" action="{{route('cliente.search')}}">
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


    @if(isset($clientes) && count($clientes) > 0)



    <h3>Lista de Clientes</h3>


    <table class="table">
        <thead class="table-inverse">
            <tr>
            <th class="col">ID</th>
            <th class="col">Nome</th>
            <th class="col">Email</th>
            <th class="col">Endereco</th>
            <th class="col">Telefone</th>
            <th class="col">Nome de Utilizador</th>
            <th class="col">Acções</th>


        </tr>
    </thead>

    <tbody class="table-striped table-bordered">
        @foreach ($clientes as $item)

        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->nome}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->endereco}}</td>
            <td>{{ $item->telefone}}</td>
            <td>{{ $item->user}}</td>
            <td >
                <a href="{{route('cliente.edit', $item->id)}}" class="nav-item"><i class="icon-edit "></i></a>
            <a href="{{route('cliente.show', $item->id)}}"  class="nav-item"><i class="icon-eye"></i></a>

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

