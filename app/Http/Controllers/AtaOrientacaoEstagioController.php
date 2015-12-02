<?php

namespace App\Http\Controllers;

use App\AtaOrientacaoEstagioDados;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AtaOrientacaoEstagioController extends Controller
{
    public function getIndex()
    {
        $dados = [];
        $usuario='';
//        dd($usuario);

        $disabled = '';
        $btnEditar = "Devolver";
        $campoorientador='usuario';

//       $orientador = Auth::ata_orientacao_estagio()->orientador;

//        $orientador = Auth::ata-orientacao-estagio()->orientador;


//        dd((Auth::user()->tipo));

        if (Auth::user()->tipo === 'aluno'){
            $campoorientador = 'usuario';
            $usuario     = Auth::user()->email;
            $btnEditar   = 'Revisar';
            $hiddenAluno = '';
        }

        if (Auth::user()->tipo === 'orientador'){
            $campoorientador = 'orientador';
            //$usuario     = Auth::user()->email;
//            $btnEditar   = 'Revisar';
//             = 'orientador';
        }
//        dd($us$campoorientadoruario);

        $dados = AtaOrientacaoEstagioDados::where($campoorientador, 'like', "%".$usuario."%")->get();
//            ->where('status', '!=', 'aprovado')->get();

//        dd($dados);

        $status = $dados->lists('status');

        foreach($status as $item) {
            switch($item){
                case 'aprovado':    $disabled    = 'disabled';   break;
                case 'reprovado':   $disabled    = 'disabled';   break;
//                case 'revisar':     $disabled    = 'disabled'; break;
                case 'aguardando':  $hiddenAluno = 'hidden';   break;
            }
        }

        return view("painel.index", compact(
            'dados',
            'status',
            'hidden',
            'usuario',
            'btnEditar',
            'disabled',
            'hiddenAluno'));
    }

    public function getCadastrar()
    {
        return view("painel.cadastrar");
    }

    public function postCadastrar()
    {
     $dados= Input::except(["_token", "avaliacao"]);
//     $data= Input::get("data");
//       dd($data);

        $ata=new AtaOrientacaoEstagioDados($dados);
        $ata->usuario = Auth::user()->email;
        $ata->orientador = Auth::user()->orientador;
//        $ata->ra = Auth::user()->ra;
//        $ata->data = $data;//Carbon::createFromFormat('Y-m-d', $dados->data);
//        dd($ata);

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

//        $data= Carbon::createFromFormat('d/m/Y', Input::get("data"))->format('Y-m-d');

//        dd($data);

        $ata = AtaOrientacaoEstagioDados::find($id);

        $ata->__construct($dados);

//        $ata->data = $data;

        $ata->status = 'aguardando';

        $ata->save();

        return redirect('ata-orientacao-estagio/');
    }

    public  function getEnviar($id)
    {
        $situacao = Input::get('situacao');

        switch($situacao){
            case '0': $status = 'aprovado'; break;
            case '1': $status = 'reprovado'; break;
            case '2': $status = 'revisar'; break;
            case '3': $status = 'aguardando'; break;
        }

        $proposta = AtaOrientacaoEstagioDados::find($id);
        $proposta->status = $status;
        $proposta->save();


        return redirect('ata-orientacao-estagio/');



    }

    public function getPdf($id)
    {



        $usuario[] = Auth::user();


        $ata = AtaOrientacaoEstagioDados::find($id);

        $orientador = Auth::user()->where('tipo', 'orientador')
                        ->where('email', $ata->orientador)->lists('name')->shift("");

//        dd($orientador);

        //$data = Carbon::createFromFormat('d/m/Y', $ata->data)->format('Y');
//        dd($ano);
        //$data['items'] = $proposta;
        //dd($proposta);
//        $dt_inicio= Carbon::createFromFormat('d/m/Y', Input::get('dt_inicio'))->format('Y-m-d');
//        $dt_fim   = Carbon::createFromFormat('d/m/Y', Input::get('dt_fim'))->format('Y-m-d');
        $title = 'Ata de Orientação Estágio';

        $date    = date('d/m/Y H:m:s');
        $empresa = 'CENTRO UNIVERSITÁRIO LUTERANO DE JI-PARANÁ';
        $view    =  \View::make('painel.ata-orientacao-estagio-pdf', compact('date','empresa', 'ata', 'title', 'data', 'usuario','orientador'))->render();
        $pdf     = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream($title.'.pdf');
        //return $pdf->download($title.'.pdf');//para baixar o arquivo


    }

    public function getPdfGeral($id)
    {

        $usuariologado[] = Auth::user();

        $usuario='';

        $disabled = '';
        $btnEditar = "Devolver";
        $campoorientador='usuario';

//       $orientador = Auth::ata_orientacao_estagio()->orientador;

//        $orientador = Auth::ata-orientacao-estagio()->orientador;


//        dd((Auth::user()->tipo));

        if (Auth::user()->tipo === 'aluno'){
            $campoorientador = 'usuario';
            $usuario     = Auth::user()->email;
            $btnEditar   = 'Revisar';
            $hiddenAluno = '';
        }

        if (Auth::user()->tipo === 'orientador'){
            $campoorientador = 'orientador';
            $usuario     = Auth::user()->email;
//            $btnEditar   = 'Revisar';
//             = 'orientador';
        }
//        dd($us$campoorientadoruario);

        $dados = AtaOrientacaoEstagioDados::where($campoorientador, 'like', "%".$usuario."%")->get();
//            ->where('status', '!=', 'aprovado')->get();


        $orientadorlogado1 = AtaOrientacaoEstagioDados::where('id', $id)->lists('orientador')->first();

//        dd($orientadorlogado1);
        $orientadorlogado = Auth::user()->where('tipo', 'orientador')
            ->where('email', $orientadorlogado1)->lists('name')->shift("");

//        dd($orientadorlogado);

        $title = 'Ata de Orientação Estágio';

        $date    = date('d/m/Y H:m:s');
        $empresa = 'CENTRO UNIVERSITÁRIO LUTERANO DE JI-PARANÁ';
        $view    =  \View::make('painel.pdf-geral', compact('date','empresa', 'ata', 'title', 'data', 'dados', 'usuariologado','orientadorlogado'))->render();
        $pdf     = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream($title.'.pdf');
    }

}



