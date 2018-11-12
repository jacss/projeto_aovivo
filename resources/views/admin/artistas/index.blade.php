@extends('layouts.app')

@section('content')

    <pagina tamanho="12">

            <painel titulo="Lista de Artistas">

                <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>


                <modallink tipo="link" nome="meuModalTeste" titulo="Criar" css=""></modallink>

                <tabela-lista
                v-bind:titulos="['#','Título','Descrição']"
                v-bind:itens="[[1,'PHP OO','Curso de PHP OO'],[2, 'Vue JS','Cursode Vue JS']]"
                ordem="desc" ordemcol="1"
                criar="criar" detalhe="detalhe" editar="editar" deletar="deletar" token="123456"
                ></tabela-lista>

            </painel>
    </pagina>

    <modal nome="meuModalTeste">
        <painel titulo="Adicionar">
            <formulario css="" action="#" method="put" enctype="multipart/form-data" token="1234">
                <div>
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo"name="titulo" placeholder="Título">
                </div>

                <div>
                <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao"name="descricao" placeholder="Descrição">
                </div><br>
                <div>
                <button type="button" class="btn btn-danger">Adicionar</button>
                </div>
            </formulario>

        </painel>
    </modal>

@endsection
