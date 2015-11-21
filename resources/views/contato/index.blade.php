@extends('layouts.master')


@section('content')


    <button type="button" class="btn btn-primary">
        <a href="/contato/create"></a>Cadastrar
    </button>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Opções</th>

        </tr>
        <tbody>

        @foreach($contatos as $contato)
            <tr>
                <td>{!! $count !!}</td>
                <td>{!! $contato->nome !!}</td>
                <td>{!! $contato->telefone !!}</td>
                <td>{!! $contato->email !!}</td>
                <td><button type="button" class="btn btn-danger">Exclir
                        <a href="/contato/create"></a>
                    </button></td>
                <td> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
