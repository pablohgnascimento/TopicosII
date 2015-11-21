@extends('template.template')

@section('content')

    {!! Form::open(array('url' => 'foo/bar')) !!}

    {!! Form::close() !!}
    pagina de cadastro
    @endsection
