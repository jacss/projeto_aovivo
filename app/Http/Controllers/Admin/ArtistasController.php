<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Artista;

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

        $listaArtistas= json_encode(Artista::select('id','nome','sobrenome','nomeartistico','cpf','estado','cidade','especialidade','descricao')->get());




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
        //dd($request->all());
        $data =$request->all();
        $validacao =\Validator::make($data,[
            "nome" => "required",
            "sobrenome" => "required",
            "nomeartistico" => "required",
            "cpf" => "required",
            "email" => "required",
            "estado" => "required",
            "cidade" => "required",
            "especialidade" => "required",
            "descricao" => "required",
            "nota" => "required",
            "tipoperfil" => "required",
            "data" => "required"
        ]);
        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $data =$request->all();
        Artista::create($data);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Artista::find($id);
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
        $data =$request->all();
        $validacao =\Validator::make($data,[
            "nome" => "required",
            "sobrenome" => "required",
            "nomeartistico" => "required",
            "cpf" => "required",
            "email" => "required",
            "estado" => "required",
            "cidade" => "required",
            "especialidade" => "required",
            "descricao" => "required",
            "nota" => "required",
            "tipoperfil" => "required",
            "data" => "required"
        ]);
        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $data =$request->all();
        Artista::find($id)->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artista::find($id)->delete();
        return redirect()->back();
    }
}
