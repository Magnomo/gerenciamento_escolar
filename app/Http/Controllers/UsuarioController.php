<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Nivel,Usuario};


class UsuarioController extends Controller
{
    //

    public function index(){
        $usuarios = Usuario::all();
        return view('index', compact('usuarios'));
    }
    public function soma($a,$b){
        return 'soma:' .( $a +$b);

    }
    public function create(){
        $niveis = Nivel::all();
        return view('form', compact('niveis'));

    }
    public function store(Request $req){
        $usuario = Usuario::create([
            'nome' => $req->nome,
            'email' =>$req->email,
            'data_nascimento' =>$req->data_nascimento,
            'nivel_id'=>$req->nivel_id
        ]);
        return $usuario;
    }
}
