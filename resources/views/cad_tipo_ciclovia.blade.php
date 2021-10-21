@extends('layout.layout')
@section('titulo','Exemplo')
@section('nomeTela','Exemplo')
@section('conteudo')
<div class="container-fluid">

    <div class="row mt-5 ">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Cadastro Tipo Ciclovia</div>

                <div class="card-body">
                    <form action="{{route('TipoCicloviaController.salvar')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" class="form-control" name="tic_id_tic" value="{{$oTCic->tic_id_tic}}" id="tic_id_tic">

                        <div class="form-group">
                            <label for="tic_nom_tipo_ciclovia">Nome:</label>
                            <input type="text" class="form-control" name="tic_nom_tipo_ciclovia" value="{{$oTCic->tic_nom_tipo_ciclovia}}" required id="tic_nom_tipo_ciclovia">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>

                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection