@extends('layout.layout')
@section('titulo','Exemplo')
@section('nomeTela','Exemplo')
@section('conteudo')
<div class="container-fluid">

    <div class="row mt-5 ">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form action="salvarCiclovia" method="post">
                        {{csrf_field()}}
                        Nome:
                        <input type="text" name="cic_nom_ciclovia" required value="" id="">
                        KM
                        <input type="text" name="cic_qte_km" value="" required id="">
                        Largura:
                        <input type="number" name="cic_qte_largura" required value="" id="">
                        <br>
                        </br>
                        Referencia
                        <textarea type="text" name="cicnom_referencia" required id=""></textarea>
                        <input type="submit" value="enviar">
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">KM</th>
                            <th scope="col">Largura</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($oCic as $cic)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$cic->cic_nom_ciclovia}}</td>
                            <td>{{$cic->cic_qte_km}}</td>
                            <td>{{$cic->cic_qte_largura}}</td>
                            <td> <a href="/deletar/{{$cic->cic_id_cic}}">Apagar</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection