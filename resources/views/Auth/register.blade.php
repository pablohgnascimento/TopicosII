<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ata de Orientação de Estagio</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="jumbotron">

<div class="col-sm-4"></div>

<div class="col-sm-4">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Login de Acesso</h3>
        </div>
        <div class="panel-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/auth/register" class="form-horizontal">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="nome" class="control-label col-sm-2">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label for="email" class="control-label col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label for="ra" class="control-label col-sm-2">RA</label>
                    <div class="col-sm-10">
                        <input type="text" name="ra" value="{{ old('ra') }}" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label for="password" class="control-label col-sm-2">Orientador</label>
                    <div class="col-sm-10">
                        {{--<select name="orientador" id="" class="form-control">--}}
                            {{--@foreach($orientador as $orientadores)--}}

                                {!! Form::select('orientador',$orientador, null,['class' => 'form-control']) !!}

                                {{--<option value="">{!! $orientadores !!}</option>--}}

                            </div>

                            {{--@endforeach--}}
                        {{--</select>--}}
                        </div>



                <div class="form-group">
                    <label for="password" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">

                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label for="password" class="control-label col-sm-2">Confirmar Senha</label>
                    <div class="col-sm-10">

                        <input type="password" name="password_confirmation" id="password" class="form-control">
                    </div>

                </div>


                <div>
                    {{--<input type="checkbox" name="remember"> Remember Me--}}
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
        </div>
        </div>



<div class="col-sm-4"></div>

<div class="container">

    <!-- resources/views/auth/login.blade.php -->


    </form>
</div>
        </div>
    </div>
</div> <!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>
