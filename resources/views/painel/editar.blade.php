@extends('template.template')

@section('content')
 <h1>Pagina de Edição</h1>

 {!! Form::model($ata , ['url'=> 'ata-orientacao-estagio/editar/'. $ata->id]) !!}
 {{--<form action="/ata-orientacao-estagio/cadastrar" method="post">--}}
     {{--{!! csrf_field() !!}--}}
     {{--colocar o nome com o mesmo nome do campo--}}

     <div class="form-group">
         {!! Form::label('data', 'Data') !!}
         {!! Form::text('data', null, ['class' => 'form-control alert-info']) !!}
         {{--<label for="data">data</label>--}}
         {{--<input type="date" class="form-control" id="data" name="data" placeholder="data">--}}
     </div>

     <div class="form-group">
         {!! Form::label('atividadedesenvolvida', 'Atividade Desenvolvida') !!}
         {!! Form::textarea('atividadedesenvolvida', null, ['class' => 'form-control alert-info']) !!}

         {{--<label for="atividadedesenvolvida">Atividade Desenvolvida</label>--}}
         {{--<textarea class="form-control" name="atividadedesenvolvida" id="atividadedesenvolvida" cols="30" rows="10"></textarea>--}}

     <div class="form-group">
         {!! Form::label('proximaatividade', 'Proxima Atividade') !!}
         {!! Form::textarea('proximaatividade', null, ['class' => 'form-control alert-info']) !!}

         {{--<label for="proximaatividade">Proxima Atividade</label>--}}
         {{--<textarea class="form-control" name="proximaatividade" id="proximaatividade" cols="30" rows="10"></textarea>--}}
     </div>

     <div class="form-group">

         <label for="avaliacao">Avaliação:  </label>
         {!! Form::label('avaliacao', 'Aprovado') !!}
         {!! Form::radio('avaliacao', 0) !!}
         {!! Form::label('avaliacao', 'Refazer') !!}
         {!! Form::radio('avaliacao', 1) !!}


     {{--<input id="avaliacao" type="radio" checked="checked" name="avaliacao" value="0" />--}}
     {{--<span>Aprovado</span>--}}
     {{--<input id="avaliacao" type="radio" name="avaliacao" value="1" />--}}
     {{--<span>Refazer</span>--}}

     </div>

     <button type="submit" class="btn btn-default">Enviar</button>
 </form>

@endsection
