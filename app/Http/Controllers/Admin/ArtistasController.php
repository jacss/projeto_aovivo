<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMigalhas= json_encode([
            ["titulo"=>"Home ","url"=>route('home')],
            ["titulo"=>" / Lista de Artistas","url"=>""]
        ]);

        $listaArtistas= json_encode([
            ["id"=>1,"nome"=>"José Augusto","estado"=>"MA","cidade"=>"Caxias","tipo"=>"Cantor","cpf"=>"493.109.333-72"],
            ["id"=>2,"nome"=>"Antonio Francisco","estado"=>"PE","cidade"=>"Aldeias Altas","tipo"=>"Dança","cpf"=>"493.108.331-72"],
            ["id"=>3,"nome"=>"Deusdeth Costa","estado"=>"DF","cidade"=>"Codó","tipo"=>"Funk","cpf"=>"413.109.343-72"]

        ]);




        return view('admin.artistas.index',compact('listaMigalhas','listaArtistas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
