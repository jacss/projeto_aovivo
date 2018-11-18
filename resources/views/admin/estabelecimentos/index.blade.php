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

            <painel titulo="Lista de Estabelecimentos">

                <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>


                <!--<modallink tipo="link" nome="meuModalTeste" titulo="Criar" css=""></modallink> -->

                <tabela-lista
                v-bind:titulos="['#','Nome Fantasia','Razão Social','Tipo','E-mail','Cnpj','Estado','Cidade','Cep','Endereço','Data']"
                v-bind:itens="{{json_encode($listaEstabelecimentos)}}"
                ordem="desc" ordemcol="1"
                criar="criar" detalhe="/admin/estabelecimentos/" editar="/admin/estabelecimentos/" deletar="/admin/estabelecimentos/" token="{{csrf_token()}}"
                modal ="sim"
                ></tabela-lista>
                <div align="center">
                    <!-- Traz a paginação-->
                        {{$listaEstabelecimentos}}
                </div>

            </painel>
    </pagina>

    <modal nome="adicionar" titulo="Adicionar">
        <formulario id="formadicionar" css="" action="{{route('estabelecimentos.store')}}" method="post" enctype="" token="{{csrf_token()}}">


                <div class="form-group">
                    <input type="text" class="form-control" id="nomefantasia"name="nomefantasia" placeholder="Nome Fantasia" value="{{old('nomefantasia')}}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="razaosocial"name="razaosocial" placeholder="Razão Social" value="{{old('razaosocial')}}">
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control" id="tipo"name="tipo" placeholder="Tipo" value="{{old('tipo')}}">
                </div>



                <div class="form-group">
                    <input type="email" class="form-control" id="email"name="email" placeholder="E-mail" value="{{old('email')}}">
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control" id="cnpj"name="cnpj" placeholder="Cnpj" value="{{old('cnpj')}}">
                </div>


                <div class="form-group">
                    <input type="text" class="form-control" id="estado"name="estado" placeholder="Estado" value="{{old('estado')}}">
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control" id="cidade"name="cidade" placeholder="Cidade" value="{{old('cidade')}}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="cep"name="cep" placeholder="Cep" value="{{old('cep')}}">
                </div>


                 <div class="form-group">
                    <input type="text" class="form-control" id="endereco"name="endereco" placeholder="Endereço" value="{{old('endereco')}}">
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
    <formulario id="formEditar"  css="" v-bind:action="'/admin/estabelecimentos/'+ $store.state.item.id" method="put" token="{{csrf_token()}}">

          <div class="form-group">
                    <input type="text" class="form-control" id="nomefantasia"name="nomefantasia" v-model="$store.state.item.nomefantasia">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="razaosocial"name="razaosocial" v-model="$store.state.item.razaosocial">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="tipo"name="tipo" v-model="$store.state.item.tipo">
                </div>

            <div class="form-group">
                    <input type="email" class="form-control" id="email"name="email" v-model="$store.state.item.email">
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control" id="cnpj"name="cnpj" v-model="$store.state.item.cnpj">
                </div>


                <div class="form-group">
                    <input type="text" class="form-control" id="estado"name="estado" v-model="$store.state.item.estado">
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control" id="cidade"name="cidade" v-model="$store.state.item.cidade">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="cep"name="cep" v-model="$store.state.item.cep">
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control" id="endereco"name="endereco"v-model="$store.state.item.endereco">
                </div>


                <div class="form-group">
                    <input type="datetime-local" class="form-control" id="data" name="data" v-model="$store.state.item.data">
                </div>



    </formulario>
        <span slot="botoes">
         <button form="formEditar" type="submit" class="btn btn-danger">Atualizar</button>
        </span>


    </modal>
    <modal nome="detalhe" v-bind:titulo="$store.state.item.nomefantasia">
        <p>@{{$store.state.item.nomefantasia}}</p>
        <p>@{{$store.state.item.razaosocial}}</p>
        <p>@{{$store.state.item.tipo}}</p>
        <p>@{{$store.state.item.email}}</p>
        <p>@{{$store.state.item.cnpj}}</p>
        <p>@{{$store.state.item.estado}}</p>
        <p>@{{$store.state.item.cidade}}</p>
        <p>@{{$store.state.item.cep}}</p>
        <p>@{{$store.state.item.endereco}}</p>
        <p>@{{$store.state.item.data}}</p>


    </modal>


@endsection
