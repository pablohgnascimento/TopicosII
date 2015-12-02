<div class="masthead">
    <h3 class="text-muted">Ata Orientacao de estagio</h3>



    <nav>
        <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li class="{!! Request::is('/ata-orientacao-estagio/') ? 'active': '' !!}"><a href="/ata-orientacao-estagio/">Inicio</a></li>


            <li class="{!! Request::is('/ata-orientacao-estagio//cadastrar*') ? 'active': '' !!}"><a href="/ata-orientacao-estagio/cadastrar">Cadastrar</a></li>

                @if(Auth::check())
                    <li><a href="#">
                            <span class="glyphicon glyphicon-user"></span> Ola
                            {!! substr(Auth::user()->name ,0, 15)!!}
                        </a>
                    </li>
                    <li>
                        <a href="/auth/logout"> Sair</a>
                    </li>
                @else
                    <li>
                        <a href="">Olá Visitante</a>
                    </li>
                    <li>
                        <a href="/auth/login"><span class="badge"> Entrar</span></a>
                    </li>
                @endif
        </ul>
    {{--</nav>--}}

</nav>

</div>
