@extends('layouts.master')
@section('content')

<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nome">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">telefone</label>
        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="telefone">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">E-mail</label>
        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="e-mail">
    </div>

    <div>
        <button type="submit" class="btn btn-default">Enviar</button>
        {{ csrf_field() }}
    </div>

</form>
    @endsection