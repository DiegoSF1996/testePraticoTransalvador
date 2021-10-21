@extends('layout.layout')
@section('titulo','Exemplo')
@section('nomeTela','Exemplo')
@section('conteudo')
<div class="container-fluid">

    <div class="row mt-5 ">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Cadastro Ciclovia</div>

                <div class="card-body">
                    <form action="{{route('CicloviaController.salvar')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" class="form-control" name="cic_id_cic" value="{{$oCic->cic_id_cic}}"  id="cic_id_cic">

                        <div class="form-group">
                            <label for="cic_nom_ciclovia">Nome:</label>
                            <input type="text" class="form-control" name="cic_nom_ciclovia" value="{{$oCic->cic_nom_ciclovia}}" required id="cic_nom_ciclovia">
                        </div>
                        <div class="form-group">
                            <label for="cic_qte_km">KM</label>
                            <input type="text" class="form-control" name="cic_qte_km" value="{{$oCic->cic_qte_km}}" required id="cic_qte_km">
                        </div>
                        <div class="form-group">
                            <label for="cic_qte_largura">Largura</label>
                            <input type="number" class="form-control" name="cic_qte_largura" value="{{$oCic->cic_qte_largura}}" required id="cic_qte_largura">
                        </div>
                        <div class="form-group">
                            <label for="cic_nom_referencia">Referência</label>
                            <textarea type="text" class="form-control" name="cic_nom_referencia" required id="cic_nom_referencia">{{$oCic->cic_nom_referencia}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>

                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection