@extends('layout.layout')
@section('titulo','Exemplo')
@section('nomeTela','Exemplo')
@section('conteudo')
<div class="container-fluid">

    <div class="row mt-5 ">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Consulta Ciclovia</div>

                <div class="card-body">
                    <div class=" pull-right">
                        <a class="btn btn-primary" href="{{route('CicloviaController.cadastro')}}">Novo</a>
                    </div>
                    </br>
                    </br>
                    <input type="text" class="form-control" id="inputPesquisa" onkeyup="buscarTabela()" placeholder="Digite para pesquisar" title="Digite">
                    <table class="table" id="tabela">
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
                                <td><a href="{{route('CicloviaController.deletar',['id'=>$cic->cic_id_cic])}}">Apagar</a> <a href="{{route('CicloviaController.cadastro',['id'=>$cic->cic_id_cic])}}">Editar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <table class="table">
                    <thead>
                        <tr>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<script>
    function buscarTabela() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("inputPesquisa");
        filter = input.value.toUpperCase();
        table = document.getElementById("tabela");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

@endsection