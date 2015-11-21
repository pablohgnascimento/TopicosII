<?php

namespace App\Http\Controllers;

use App\AtaOrientacaoEstagioDados;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AtaOrientacaoEstagioController extends Controller
{
    public function getIndex()
    {
        $dados = AtaOrientacaoEstagioDados::all();

        return view("painel.index", compact('dados'));
    }

    public function getCadastrar()
    {
        return view("painel.cadastrar");
    }

    public function postCadastrar()
    {
     $dados= Input::except("_token");

        $ata=new AtaOrientacaoEstagioDados($dados);
        $ata->usuario = Auth::user()->email;
        //dd($ata);
        $ata->save();


        return redirect('/ata-orientacao-estagio/');
    }

    public function getEditar($id)
    {
        $ata = AtaOrientacaoEstagioDados::find($id);

        return view("painel.editar", compact('ata'));
    }

    public function postEditar($id)
    {
        $dados= Input::except("_token");

        $ata=AtaOrientacaoEstagioDados::find($id);

        $ata->__construct($dados);

        $ata->save();

        return redirect('ata-orientacao-estagio/');
    }
}
