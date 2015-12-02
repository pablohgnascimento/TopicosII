<!doctype html>
<html lang="pt_Br">
<head>
    <meta charset="UTF-8">
    <title>{!! $title !!}</title>

    {{--{!! Html::style('/assets/css/bootstrap.css') !!}--}}
</head>


<h1 style="text-align: center;">
    {!! $title !!}
</h1>

<body>

    @foreach($usuariologado as $usuarios)

<table>
    <tr>
        <td>
            Nome do Aluno: {!! $usuarios['name']!!}
        </td>

        <td style="padding-left: 80px">
            Ano/Semestre: {!! $usuarios['anosemestre']!!}
        </td>
    </tr>

    <tr>
        <td>
            Nome do Orientador: {!! $orientadorlogado !!}

        </td>

        <td style="padding-left: 80px">
            RA: {!! $usuarios['ra']!!}
        </td>
    </tr>
</table>

    @endforeach

<table class="table table-striped">
     <thead>

     <tr>
         <th>Data</th>
         <th>Descrição da Atividade desenvolvida</th>
         <th>Proxima Atividade</th>
         <th>Status</th>
     </tr>

     </thead>
     <tbody>
     @foreach($dados as $dado)

     <tr>
         <td>
             {!! $dado->created_at !!}
         </td>
         <td>
             {!! $dado->atividadedesenvolvida !!}
         </td>
         <td>
             {!! $dado->proximaatividade !!}
         </td>
         <td>
             {!! $dado->status !!}
         </td>
         {{--<td>--}}
             {{--<a href="/ata-orientacao-estagio/editar/{!! $dado->id !!}" class="btn btn-xs btn-warning">--}}
             {{--<span class="glyphicon glyphicon-edit" aria-hidden="true"> Editar </span>--}}
             {{--</a>&nbsp;--}}
         {{--</td>--}}

         {{--<td>--}}

             {{--@if(!empty($usuario))--}}

                 {{--@if(!$hidden)--}}
                         {{--{!! dd($dado->status) !!}--}}
                            {{--<!-- Single button --->--}}
                 {{--@if(($dado->status !== 'aprovado') && ($dado->status !== 'aguardando'))--}}
                     {{--<a href="/ata-orientacao-estagio/editar/{!! $dado->id !!}" class="btn btn-xs btn-success">--}}
                         {{--<span class="glyphicon glyphicon-edit" aria-hidden="true"> {!! $btnEditar !!}</span>--}}
                     {{--</a>--}}
                 {{--@endif--}}
             {{--@else--}}
                 {{--@if(($dado->status !== 'aprovado') && ($dado->status === 'aguardando'))--}}
                     {{--<div class="btn-group">--}}
                         {{--<button type="button" class="btn btn-xs btn-primaryme dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                             {{--Escolha <span class="caret"></span>--}}
                         {{--</button>--}}
                         {{--<ul class="dropdown-menu">--}}
                             {{--<li>--}}
                                 {{--<a href="/ata-orientacao-estagio/enviar/{!! $dado->id !!}?situacao=2" >--}}
                                     {{--<span class="glyphicon glyphicon-edit" aria-hidden="true"> {!! $btnEditar !!} </span>--}}
                                 {{--</a>--}}
                             {{--</li>--}}
                             {{--<li role="separator" class="divider"></li>--}}
                             {{--<li>--}}
                                 {{--<a href="/ata-orientacao-estagio/enviar/{!! $dado->id !!}?situacao=0" >--}}
                                     {{--<span class="glyphicon glyphicon-send" aria-hidden="true"> Aprovar </span>--}}
                                 {{--</a>--}}
                             {{--</li>--}}
                         {{--</ul>--}}
                     {{--</div>--}}

                 {{--@endif--}}
             {{--@endif--}}
         {{--</td>--}}
         {{--<td>--}}
             {{--<button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal">--}}
                 {{--<span class="glyphicon glyphicon-zoom-in"></span> Ver--}}

             {{--</button>--}}
             {{--<span class="glyphicon glyphicon-download" aria-hidden="true"> PDF</span>--}}
             {{--<a href="/ata-orientacao-estagio/pdf/{!! $dado->id !!}" class="btn btn-xs btn-danger">--}}
                 {{--<span class="glyphicon glyphicon-download-alt" aria-hidden="true"> PDF</span>--}}
             {{--</a>--}}
         {{--</td>--}}
     </tr>

         @endforeach
     </tbody>
 </table>
</body>
</html>
