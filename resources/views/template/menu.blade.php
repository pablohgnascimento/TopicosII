<div class="masthead">
    <h3 class="text-muted">Ata Orientacao de estagio</h3>



    <nav>
        <ul class="nav nav-justified">
            <li><a href="/">Home</a></li>
            <li class="{!! Request::is('/ata-orientacao-estagio/') ? 'active': '' !!}"><a href="/ata-orientacao-estagio/">Inicio</a></li>


            <li class="{!! Request::is('/ata-orientacao-estagio//cadastrar*') ? 'active': '' !!}"><a href="/ata-orientacao-estagio/cadastrar">Cadastrar</a></li>

        </ul>
    {{--</nav>--}}

</nav>
    <div class="text-right">
        @if(Auth::check())
            <span class="glyphicon glyphicon-user"></span> Ola
            {!! substr(Auth::user()->name ,0, 15)!!}
            <a href="/auth/logout"> Sair</a>

        @else
            Olá Visitante
            <a href="/auth/login"><span class="badge"> Entrar</span></a>
        @endif
    </div>

</div>
