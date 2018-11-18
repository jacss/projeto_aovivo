<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;
use App\User;
use App\Estabelecimento;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMigalhas= json_encode([
            ["titulo"=>"Home","url"=>""]

        ]);
        $totalArtistas =Artista::count();
        $totalEstabelecimentos=Estabelecimento::count();
        $totalUsusarios=User::count();
        return view('home', compact('listaMigalhas','totalArtistas','totalEstabelecimentos','totalUsusarios'));
    }
}
