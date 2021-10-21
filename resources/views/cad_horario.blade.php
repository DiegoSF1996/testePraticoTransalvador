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
                    <form action="salvarCiclovia" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="cic_nom_ciclovia">Nome</label>
                            <input type="text" class="form-control" id="cic_nom_ciclovia" aria-describedby="emailHelp" name="cic_nom_ciclovia" placeholder="Digite o nome da ciclovia">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

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