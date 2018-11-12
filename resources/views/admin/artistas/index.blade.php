@extends('layouts.app')

@section('content')

    <pagina tamanho="12">

            <painel titulo="Lista de Artistas">

                <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>


                <!--<modallink tipo="link" nome="meuModalTeste" titulo="Criar" css=""></modallink> -->

                <tabela-lista
                v-bind:titulos="['#','Nome Artistico','Estado','Cidade','Tipo','Cpf']"
                v-bind:itens="{{$listaArtistas}}"
                ordem="desc" ordemcol="1"
                criar="criar" detalhe="detalhe" editar="editar" deletar="deletar" token="123456"
                modal ="sim"
                ></tabela-lista>

            </painel>
    </pagina>

    <modal nome="adicionar">
        <painel titulo="Adicionar">
            <formulario css="" action="#" method="put" enctype="multipart/form-data" token="1234">
                <div class="form-group">
                    <label for="nomeartitico">Nome Artístico</label>
                    <input type="text" class="form-control" id="nomeartitico"name="nomeartitico" placeholder="Nome Artitico">
                </div>
                <div class="form-group">
                <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao"name="descricao" placeholder="Descrição">
                </div><br>
                <div>
                <button type="button" class="btn btn-danger">Adicionar</button>
                </div>
            </formulario>

        </painel>
    </modal>
    <modal nome="editar">
        <painel titulo="Editar">
            <formulario css="" action="#" method="put" enctype="multipart/form-data" token="1234">

                <div class="form-group">
                    <label for="nomeartitico">Nome Artístico</label>
                    <input type="text" class="form-control" id="nomeartitico" name="nomeartitico" v-model="$store.state.item.nome" placeholder="Nome Artístico">
                </div>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado"name="estado" v-model="$store.state.item.estado" placeholder="Estado">
                </div class="form-group">

                <div>
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade"name="cidade" v-model="$store.state.item.cidade" placeholder="Cidade">
                </div>

                <div>
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo"name="tipo" v-model="$store.state.item.tipo" placeholder="Tipo">
                </div>
                <div>
                <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf"name="cpf" v-model="$store.state.item.cpf" placeholder="CPF">
                </div><br>
                <div>
                <button type="button" class="btn btn-danger">Atualizar</button>
                </div>
            </formulario>

        </painel>
    </modal>

@endsection
