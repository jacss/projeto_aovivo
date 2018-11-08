@extends('layouts.app')

@section('content')

    <pagina tamanho="12">
            <painel titulo="Lista de Artistas">

                <tabela-lista
                v-bind:titulos="['#','Título','Descrição']"
                v-bind:itens="[[1,'PHP OO','Curso de PHP OO'],[2, 'Vue JS','Cursode Vue JS']]"
                ></tabela-lista>

            </painel>
    </pagina>

@endsection
