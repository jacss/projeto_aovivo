@extends('layouts.app')

@section('content')

<pagina tamanho="4">
        <painel titulo="Administrador">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

                   <div class="row">
                       <div class="col-md-6 ">
                          <caixa qtd="80" titulo="ARTISTAS NA PLATAFORMA" url="{{route('artistas.index')}}" cor="orange" icone="ion-ios-people"></caixa>

                       </div>

                        <div class="col-md-6">
                        <caixa qtd="50" titulo="ESTABELECIMENTO NA PLATAFORMA" url="#teste" cor="red" icone="ion-ios-people"></caixa>

                       </div>

                        <div class="col-md-6">
                        <caixa qtd="R$ 350,00" titulo="USUÁRIOS" url="{{route('usuarios.index')}}" cor="green" icone="ion-cash"></caixa>
                        </div>

                        <div class="col-md-6">
                        <caixa qtd="80" titulo="CONTRATOS FECHADOS" url="#" cor="blue" icone="ion ion-pie-graph"></caixa>
                        </div>
                    </div>

        </painel>
</pagina>

@endsection
