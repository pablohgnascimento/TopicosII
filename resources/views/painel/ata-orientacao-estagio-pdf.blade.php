<!doctype html>
<html lang="pt_Br">
<head>
    <meta charset="UTF-8">
    <title>{!! $title !!}</title>

    {{--{!! Html::style('/assets/css/bootstrap.css') !!}--}}
</head>


        <h1 style="text-align: center;">
            {!! $title !!}
        </h1>

<body>

<strong>
    @foreach($usuario as $usuarios)

<table>
    <tr>
        <td>
            Nome do Aluno: {!! $usuarios['name']!!}
        </td>

        <td>

        </td>

        <td>

        </td>


        <td style="text-align: right;">
            Ano/Semestre: {!! $usuarios['anosemestre']!!}
        </td>
    </tr>

    <tr>
        <td>
            Nome do Orientador: {!! $orientador !!}

        </td>

        <td>

        </td>

        <td>


        </td>

        <td>

            RA: {!! $usuarios['ra']!!}
        </td>
    </tr>
</table>










    {{--RA: {!! $usuario!!}--}}

    {{--Nome do Aluno: {!! $registroaluno!!}--}}


@endforeach

</strong>


<table>
    <thead>
    <tr>
        <th>
            #
        </th>

        <th>
            Data
        </th>

        <th>
            Descrição da Atividade desenvolvida
        </th>

        <th>
            Proxima Atividade
        </th>

        <th>
            Avaliação


        </th>

    </tr>
    </thead>

    <tbody>

        <tr>
            <td>
                {!! $ata->id!!}
            </td>

            <td>
                {!! $ata->data!!}
            </td>

            <td>
                {!! $ata->atividadedesenvolvida!!}
            </td>

            <td>
                {!! $ata->proximaatividade!!}
            </td>

            <td>
                {!! $ata->status!!}
            </td>
        </tr>

    </tbody>


</table>





</body>
</html>