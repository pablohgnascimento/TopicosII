<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class FormularioController extends Controller
{
    public  function getIndex()
    {
        return view ('formulario');
    }

    public function postAdicionar()
    {
        $dadosFormulario= Input::get('nome');

        dd($dadosFormulario);

        return "Adicionado..";
    }
}