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

    <title>Ata de Orientaçnao de Estagio</title>

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
            <form method="POST" action="/auth/login" class="form-horizontal">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email" class="control-label col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label for="password" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">

                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                </div>


                <div>
                    {{--<input type="checkbox" name="remember"> Remember Me--}}
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Entrar</button>
                    <a href="/auth/register" class="btn btn-success">Registrar</a>
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
