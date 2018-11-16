@extends('layouts.app')

@section('content')

    <pagina tamanho="12">
    @if($errors->all())
    <div class="alert alert-danger alert-dismissible text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidd></span></button>
    @foreach($errors->all() as $key => $value)
        <li><strong>{{$value}}</strong></li>
    @endforeach
    </div>

     @endif

            <painel titulo="Lista de Usuarios">

                <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>


                <!--<modallink tipo="link" nome="meuModalTeste" titulo="Criar" css=""></modallink> -->

                <tabela-lista
                v-bind:titulos="['#','Nome','E-mail']"
                v-bind:itens="{{json_encode($listaModelo)}}"
                ordem="desc" ordemcol="1"
                criar="criar" detalhe="/admin/usuarios/" editar="/admin/usuarios/" deletar="/admin/usuarios/" token="{{csrf_token()}}"
                modal ="sim"
                ></tabela-lista>
                <div align="center">
                    <!-- Traz a paginação-->
                        {{$listaModelo}}
                </div>

            </painel>
    </pagina>

    <modal nome="adicionar" titulo="Adicionar">
        <formulario id="formadicionar" css="" action="{{route('usuarios.store')}}" method="post" enctype="" token="{{csrf_token()}}">


                <div class="form-group">
                    <input type="text" class="form-control" id="name"name="name" placeholder="Nome" value="{{old('name')}}">
                </div>


                <div class="form-group">
                    <input type="email" class="form-control" id="email"name="email" placeholder="E-mail" value="{{old('email')}}">
                </div>


                <div class="form-group">
                    <input type="password" class="form-control" id="password"name="password" placeholder="Senha" value="{{old('password')}}">
                </div>



        </formulario>

        <span slot="botoes">
            <button form="formadicionar" type="submit" class="btn btn-danger">Adicionar</button>
        </span>


    </modal>
    <modal nome="editar" titulo="Editar"  >
    <formulario id="formEditar"  css="" v-bind:action="'/admin/usuarios/'+ $store.state.item.id" method="put" token="{{csrf_token()}}">

        <div class="form-group">
           <input type="text" class="form-control" id="name" name="name" v-model="$store.state.item.name" >
        </div>

        <div class="form-group">
           <input type="email" class="form-control" id="email" name="email" v-model="$store.state.item.email" >
        </div>

        <div class="form-group">
           <input type="password" class="form-control" id="password" name="password">
        </div>

    </formulario>
        <span slot="botoes">
         <button form="formEditar" type="submit" class="btn btn-danger">Atualizar</button>
        </span>


    </modal>
    <modal nome="detalhe" v-bind:titulo="$store.state.item.name">
        <p>@{{$store.state.item.email}}</p>


    </modal>


@endsection
