@extends('templates.page')

@section('title', 'Entrada')

@section('header')



<h3> Pesquisar Entradas</h3>
<form class="form form-inline" method="POST" action="{{route('entrada.search')}}">
    {!! csrf_field() !!}

<label for="params"> Pesquisar por</label>
    <select class="form-control" name="params">
        <option value={{"id"}}>ID</option>
        <option value={{"data"}}>Data</option>
    </select>

    <input type=text class="form-control" name="field" placeholder="Keyword" required></input>

    <button class="btn btn-primary form-control" type="submit"><i class="icon-search"></i>Pesquisar</button>
</form> <br><br>

@endsection('header')

@section('content')


    @if(isset($entradas) && count($entradas) > 0)



    <h3>Lista de entradas</h3>


    <table class="table">
        <thead class="table-inverse">
            <tr>
            <th class="col">ID</th>
            <th class="col">Funcionario</th>
            <th class="col">Produto</th>
            <th class="col">Quantidade</th>
            <th class="col">Data de Entrada</th>



        </tr>
    </thead>

    <tbody class="table-striped table-bordered">
        @foreach ($entradas as $item)

        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->id_user}}</td>
            <td>{{ $item->id_produto}}</td>
            <td>{{ $item->quantidade}}</td>
            <td>{{ $item->data_entrada}}</td>


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

