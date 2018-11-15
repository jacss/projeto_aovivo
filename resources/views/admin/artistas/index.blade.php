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

            <painel titulo="Lista de Artistas">

                <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>


                <!--<modallink tipo="link" nome="meuModalTeste" titulo="Criar" css=""></modallink> -->

                <tabela-lista
                v-bind:titulos="['#','Nome','Sobrenome','Nome Artístico','Cpf','Estado','Cidade','Especialidade','Descrição']"
                v-bind:itens="{{$listaArtistas}}"
                ordem="desc" ordemcol="1"
                criar="criar" detalhe="/admin/artistas/" editar="/admin/artistas/" deletar="/admin/artistas/" token="{{csrf_token()}}"
                modal ="sim"
                ></tabela-lista>

            </painel>
    </pagina>

    <modal nome="adicionar" titulo="Adicionar">
        <formulario id="formadicionar" css="" action="{{route('artistas.store')}}" method="post" enctype="" token="{{csrf_token()}}">


                <div class="form-group">
                    <input type="text" class="form-control" id="nome"name="nome" placeholder="Nome" value="{{old('nome')}}">
                </div>


                <div class="form-group">
                    <input type="text" class="form-control" id="sobrenome"name="sobrenome" placeholder="Sobrenome" value="{{old('sobrenome')}}">
                </div>


                <div class="form-group">
                    <input type="text" class="form-control" id="nomeartistico"name="nomeartistico" placeholder="Nome Artistico" value="{{old('nomeartistico')}}">
                </div>


                 <div class="form-group">
                    <input type="text" class="form-control" id="cpf"name="cpf" placeholder="Cpf" value="{{old('cpf')}}">
                </div>


                <div class="form-group">
                    <input type="text" class="form-control" id="email"name="email" placeholder="E-mail" value="{{old('email')}}">
                </div>


                 <div class="form-group">
                    <input type="text" class="form-control" id="estado"name="estado" placeholder="Estado" value="{{old('estado')}}">
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control" id="cidade"name="cidade" placeholder="Cidade" value="{{old('cidade')}}">
                </div>


                 <div class="form-group">
                    <input type="text" class="form-control" id="especialidade"name="especialidade" placeholder="Especialidade" value="{{old('especialidade')}}">
                </div>


                <div class="form-group">
                    <input type="text" class="form-control" id="descricao"name="descricao" placeholder="Descrição" value="{{old('descricao')}}">
                </div>


                 <div class="form-group">
                    <input type="text" class="form-control" id="nota"name="nota" placeholder="Nota" value="{{old('nota')}}">
                </div>


                 <div class="form-group">
                    <input type="text" class="form-control" id="tipoperfil"name="tipoperfil" placeholder="Tipo perfil" value="{{old('tipoperfil')}}">
                </div>

                <div class="form-group">
                    <input type="datetime-local" class="form-control" id="data" name="data" value="{{old('data')}}">
                </div>

        </formulario>

        <span slot="botoes">
            <button form="formadicionar" type="submit" class="btn btn-danger">Adicionar</button>
        </span>


    </modal>
    <modal nome="editar" titulo="Editar"  >
    <formulario id="formEditar"  css="" v-bind:action="'/admin/artistas/'+ $store.state.item.id" method="put" token="{{csrf_token()}}">

        <div class="form-group">
           <input type="text" class="form-control" id="nome" name="nome" v-model="$store.state.item.nome" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="sobrenome" name="sobrenome" v-model="$store.state.item.sobrenome" >
        </div>


        <div class="form-group">
           <input type="text" class="form-control" id="nomeartistico" name="nomeartistico" v-model="$store.state.item.nomeartistico" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="cpf" name="cpf" v-model="$store.state.item.cpf" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="email" name="email" v-model="$store.state.item.email" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="estado" name="estado" v-model="$store.state.item.estado" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="cidade" name="cidade" v-model="$store.state.item.cidade" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="especialidade" name="especialidade" v-model="$store.state.item.especialidade" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="descricao" name="descricao" v-model="$store.state.item.descricao" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="nota" name="nota" v-model="$store.state.item.nota" >
        </div>

        <div class="form-group">
           <input type="text" class="form-control" id="tipoperfil" name="tipoperfil" v-model="$store.state.item.tipoperfil" >
        </div>

        <div class="form-group">
           <input type="datetime-local" class="form-control" id="data" name="data" v-model="$store.state.item.data" >
        </div>

    </formulario>
        <span slot="botoes">
         <button form="formEditar" type="submit" class="btn btn-danger">Atualizar</button>
        </span>


    </modal>
    <modal nome="detalhe" v-bind:titulo="$store.state.item.nome">
        <p>@{{$store.state.item.sobrenome}}</p>
        <p>@{{$store.state.item.nomeartistico}}</p>
        <p>@{{$store.state.item.cpf}}</p>
        <p>@{{$store.state.item.estado}}</p>
        <p>@{{$store.state.item.cidade}}</p>
        <p>@{{$store.state.item.descricao}}</p>
        <p>@{{$store.state.item.data}}</p>


    </modal>


@endsection
