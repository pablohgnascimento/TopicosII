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

    <title>Ata de Orientação de Estágio</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/justified-nav.css" rel="stylesheet">


</head>

<body>

<div class="container">

     @include('template.menu')

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
       @yield('corpo')

        @section('content')

            @show

    </div>

</div> <!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>
