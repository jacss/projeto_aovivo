<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estabelecimento;

class EstabelecimentoController extends Controller
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
            ["titulo"=>" / Lista de Estabelecimentos","url"=>""]
        ]);

        $listaEstabelecimentos=(Estabelecimento::select('id','nomefantasia','razaosocial','tipo','email','cnpj','estado','cidade','cep','endereco','data')->paginate(2));
        return view('admin.estabelecimentos.index',compact('listaMigalhas','listaEstabelecimentos'));
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
        $data =$request->all();
        $validacao =\Validator::make($data,[
            "nomefantasia" => "required",
            "razaosocial" => "required",
            "tipo" => "required",
            "email" => "required",
            "cnpj" => "required",
            "estado" => "required",
            "cidade" => "required",
            "cep" => "required",
            "endereco" => "required",
            "data" => "required"

        ]);
        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $data =$request->all();
        Estabelecimento::create($data);
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
        return Estabelecimento::find($id);
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
            "nomefantasia" => "required",
            "razaosocial" => "required",
            "tipo" => "required",
            "email" => "required",
            "cnpj" => "required",
            "estado" => "required",
            "cidade" => "required",
            "cep" => "required",
            "endereco" => "required",
            "data" => "required"
        ]);
        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $data =$request->all();
        Estabelecimento::find($id)->update($data);
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
        Estabelecimento::find($id)->delete();
        return redirect()->back();
    }
}
