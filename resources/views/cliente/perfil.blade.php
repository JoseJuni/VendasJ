@extends('templates.page')

@section('title', 'Perfil Cliente')


@section('header')




@endsection

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Perfil</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            <div class="heading-elements">

            </div>
        </div>
        <div class="card-body collapse in">
            <div class="card-block">

                <form class="form">
                    <div class="form-body">
                        <h4 class="form-section"><i class="icon-head"></i> Dados Pessoais</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput1">Nome</label>
                                <input type="text" id="projectinput1" class="form-control" value="{{$clientes->nome}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput2">Nome de Utilizador</label>
                                    <input type="text" id="projectinput2" class="form-control"  value="{{$clientes->user}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput3">E-mail</label>
                                    <input type="text" id="projectinput3" class="form-control"  value="{{$clientes->email}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput4">Telefone</label>
                                    <input type="text" id="projectinput4" class="form-control"  value="{{$clientes->telefone}}" readonly>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="projectinput4">Endereco</label>
                                    <textarea class="form-control" rows="4" readonly>{{$clientes->endereco}}</textarea>
                                </div>
                            </div>



                        </div>

                        <h4 class="form-section"><i class="icon-clipboard4"></i> Encomendas Realizadas</h4>

                        <h4 class="form-section"><i class="icon-clipboard4"></i> Encomendas Pendentes</h4>

                        <h4 class="form-section"><i class="icon-clipboard4"></i> Reclamações</h4>

                    <div class="form-actions">
                        <a href="{{route('admin.cliente')}}" class="btn btn-warning mr-1">
                            <i class="icon-cross2"></i> Cancelar
                        </a>
                         <a href="{{route('cliente.destroy', $clientes->id)}}" class="btn btn-danger">
                            <i class="icon-trash"></i> Remover Cliente
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
