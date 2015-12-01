@extends('template.template')

@section('content')
 Pagina inicial da ATA.

 <table class="table table-striped">
     <thead>
     <tr>
         <td>#</td>
         <td>Data</td>
         <td>Descrição da Atividade desenvolvida</td>
         <td>Proxima Atividade</td>
         <td>Avaliação</td>
         <td>Ação</td>
     </tr>

     </thead>
     <tbody>
     @foreach($dados as $dado)

     <tr>
         <td>
             {!! $dado->id !!}
         </td>

         <td>
             {!! $dado->data !!}
         </td>
         <td>
             {!! $dado->atividadedesenvolvida !!}
         </td>
         <td>
             {!! $dado->proximaatividade !!}
         </td>
         <td>
             {!! $dado->avaliacao !!}
         </td>
         <td>
             <a href="/ata-orientacao-estagio/editar/{!! $dado->id !!}" class="btn btn-xs btn-warning">
             <span class="glyphicon glyphicon-edit" aria-hidden="true"> Editar </span>
             </a>&nbsp;
         </td>
     </tr>
         @endforeach
     </tbody>
 </table>
@endsection
