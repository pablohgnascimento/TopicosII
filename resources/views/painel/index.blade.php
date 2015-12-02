@extends('template.template')

@section('content')

    @if(!$dados->isEmpty())

 <table class="table table-striped">
     <thead>

     <tr>
         <th>#</th>
         <th>Data</th>
         <th>Descrição da Atividade desenvolvida</th>
         <th>Proxima Atividade</th>
         <th>Status</th>
         <th>Ação</th>
     </tr>

     </thead>
     <tbody>
     @foreach($dados as $dado)

     <tr>
         <td>
             {!! $dado->id !!}
         </td>

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

         <td>

             @if(!empty($usuario))

                 {{--@if(!$hidden)--}}
                         {{--{!! dd($dado->status) !!}--}}
                            <!-- Single button --->
                 @if(($dado->status !== 'aprovado') && ($dado->status !== 'aguardando'))
                     <a href="/ata-orientacao-estagio/editar/{!! $dado->id !!}" class="btn btn-xs btn-warning">
                         <span class="glyphicon glyphicon-edit" aria-hidden="true"> {!! $btnEditar !!}</span>
                     </a>
                 @endif
             @else
                 @if(($dado->status !== 'aprovado') && ($dado->status === 'aguardando'))
                     <div class="btn-group">
                         <button type="button" class="btn btn-xs btn-primaryme dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Escolha <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu">
                             <li>
                                 <a href="/ata-orientacao-estagio/enviar/{!! $dado->id !!}?situacao=2" >
                                     <span class="glyphicon glyphicon-edit" aria-hidden="true"> {!! $btnEditar !!} </span>
                                 </a>
                             </li>
                             <li role="separator" class="divider"></li>
                             <li>
                                 <a href="/ata-orientacao-estagio/enviar/{!! $dado->id !!}?situacao=0" >
                                     <span class="glyphicon glyphicon-send" aria-hidden="true"> Aprovar </span>
                                 </a>
                             </li>
                         </ul>
                     </div>

                 @endif
             @endif
         </td>
         <td>
             {{--<button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal">--}}
                 {{--<span class="glyphicon glyphicon-zoom-in"></span> Ver--}}

             {{--</button>--}}
             {{--<span class="glyphicon glyphicon-download" aria-hidden="true"> PDF</span>--}}
             <a href="/ata-orientacao-estagio/pdf/{!! $dado->id !!}" class="btn btn-xs btn-danger">
                 <span class="glyphicon glyphicon-download-alt" aria-hidden="true"> PDF</span>
             </a>
         </td>
     </tr>

         @endforeach
     </tbody>
 </table>

 <a href="/ata-orientacao-estagio/pdf-geral/{!! $dado->id !!}" class="btn btn-xs btn-danger">
     <span class="glyphicon glyphicon-download-alt" aria-hidden="true"> PDF-Geral</span>
 </a>

 @else
        <div class="text-center">
            <span class="alert alert-danger">
                Voce nao possui ata cadastrada
            </span>
        </div>
 @endif

 {{--@include('painel.show')--}}
@endsection
