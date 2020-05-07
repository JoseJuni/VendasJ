@extends('templates.page')

@section('title', 'Cadastro de cliente')


@section('header')


    <h4> Registo de Cliente</h4>

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




    <form action="{{route('cliente.add')}}" method="post" class="form">

        {!! csrf_field() !!}


        <label for="Nome">  Nome</label> <br>
        <input type="text" class="form-control" required value="{{old('nome')}}" name="nome" id="" placeholder="Nome" value="{{old('nome')}}"> <br>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="timesheetinput5">Email</label>
                        <div class="position-relative has-icon-left">
                            <div class="position-relative has-icon-left">
                                <input type="email" id="preco" class="form-control" required value="{{old('email')}}" name="email">
                                <div class="form-control-position">
                                    <i class="icon-email"></i>
                                </div>
                            </div>

                        <div class="form-control-position">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="preco">Telefone</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="preco" class="form-control" required value="{{old('telefone')}}" name="telefone">
                        <div class="form-control-position">
                            <i class="icon-phone"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Quantidade">Utilizador</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="user" class="form-control" required value="{{old('user')}}" name="user">
                        <div class="form-control-position">
                            <i class="icon-user2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="validade">Senha</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="password" class="form-control" required value="{{old('password')}}" name="password">
                        <div class="form-control-position">
                            <i class="icon-key"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <label for="endereco">  Endereco</label> <br>
        <textarea rows="5" class="form-control" required value="{{old('endereco')}}" name="endereco" id="" placeholder="endereco" value="{{old('nome')}}">
        </textarea>
            <br>




        <div class="form-actions right">
            <a href="{{route('admin.cliente')}}" class="btn btn-warning mr-1">
                <i class="icon-cross2"></i> Cancelar
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="icon-check2"></i> Guardar
            </button>
        </div>
    </form>
</div>



@endsection
