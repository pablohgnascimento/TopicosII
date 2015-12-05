@extends('template.template')

@section('content')

    {!! Form::open(['url' => "/ata-orientacao-estagio/mensagem/{ $ata->id }", 'method' => 'post']) !!}


    <input type="text" name="id_ata" value="{!! $ata->id !!}" class="hidden">

                        <textarea name="mensagem" id="mensagem" cols="80" rows="10" class="form-control"></textarea>

                        <input type="submit" value="Enviar" class="btn btn-success" />

    <a href="/ata-orientacao-estagio/" class="btn btn-xs btn-warning"> Voltar </a>
                    {!! Form::close() !!}
@endsection