@extends('layout.layout')
@section('titulo','Exemplo')
@section('nomeTela','Exemplo')
@section('conteudo')
<div class="container-fluid">

    <div class="row mt-5 ">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">{{$o->exemplo}}</div>

                <div class="card-body">
                    <form action="teste" method="post">
                        {{csrf_field()}}
                        <input type="text" name="exemplo" value="exemplo" id="">
                        <input type="submit" value="enviar">
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection