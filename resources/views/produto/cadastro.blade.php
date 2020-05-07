@extends('templates.page')

@section('title', 'Cadastro de Produto')


@section('header')


    <h4> Registo de Produto</h4>

@endsection

@section('content')


<div class="col-8 center">

    @if( isset($errors) && count($errors) > 0)
        <div class="alert alert-danger">

            @foreach ($errors->all() as $item)

                <p> {{ $item}}</p>

            @endforeach

        </div>
    @endif

    <!-- Confirnacao de delete -->
    <div class='modal fade' id='category' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog' role='form'>
        <div class='modal-content modal-body'>
        <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Adicionar Categoria de Produto</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <!--Corpo  -->
            <form action="{{route('produto.category')}}" class="inline">

                <input class="form-control" type="text" name="nome" id="" placeholder="Nome da categoria">

                <div class='modal-footer'>
                    <button type="submit" class='btn btn-primary'>Guardar</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancelar</button>
                </div>
            </form>

            </div>
        </div>
</div>
<!--end Confirnacao de delete -->


    <form action="{{route('produto.add')}}" method="post" class="form">

        {!! csrf_field() !!}


        <label for="Nome">  Nome</label> <br> <input type="text" class="form-control" required value="{{old('nome')}}" name="nome" id="" placeholder="Nome" value="{{old('nome')}}"> <br>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="timesheetinput5">Categoria | Categoria do produto não consta na lista?
                        <button type="button" data-target="#category" data-toggle="modal" class="btn btn-primary"> <i class="icon-plus"></i> Add Categoria</button></label>
                    <div class="position-relative has-icon-left">

                        <select class="form-control" required value="{{old('id_categoria')}}" name="id_categoria" id="">

                            @foreach($categoria as $item){
                                <option value="{{$item->id}}"> {{$item->nome}}</option>
                            }
                            @endforeach

                        </select>

                        <div class="form-control-position">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <div class="position-relative has-icon-left">
                        <input type="number" id="preco" class="form-control" required value="{{old('preco')}}" name="preco">
                        <div class="form-control-position">
                            <i class="icon-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Quantidade">Quantidade</label>
                    <div class="position-relative has-icon-left">
                        <input type="number" id="Quantidade" class="form-control" required value="{{old('quantidade')}}" name="quantidade">
                        <div class="form-control-position">
                            <i class="icon-ios-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="validade">Marca</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="validade" class="form-control" required value="{{old('marca')}}" name="marca">
                        <div class="form-control-position">
                            <i class="icon-brand"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="timesheetinput7">Descrição</label>
            <div class="position-relative has-icon-left">
                <textarea id="timesheetinput7" rows="5" class="form-control" required value="{{old('descricao')}}" name="descricao" placeholder="Descrição"></textarea>
                <div class="form-control-position">
                    <i class="icon-file2"></i>
                </div>
            </div>
        </div>


        <div class="form-actions right">
            <a href="{{route('admin.produto')}}" class="btn btn-warning mr-1">
                <i class="icon-cross2"></i> Cancelar
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="icon-check2"></i> Guardar
            </button>
        </div>
    </form>
</div>



@endsection
