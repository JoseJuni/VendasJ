@extends('templates.page')

@section('title', 'Cadastro de cliente')


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


    <form action="{{route('produto.add')}}" method="post" class="form">

        {!! csrf_field() !!}


        <label for="Nome">  Nome</label> <br> <input type="text" class="form-control" required value="{{old('nome')}}" name="nome" id="" placeholder="Nome" value="{{old('nome')}}"> <br>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="timesheetinput5">Categoria</label>
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
                    <label for="validade">Data de validade</label>
                    <div class="position-relative has-icon-left">
                        <input type="date" id="validade" class="form-control" required value="{{old('validade')}}" name="validade">
                        <div class="form-control-position">
                            <i class="icon-clock5"></i>
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
