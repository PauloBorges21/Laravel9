<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
</head>
<body>
<h1>Bem Vindo,{{$nome}} {{$sobrenome}}</h1>
<h2> sua idade {{$idade}}</h2>
<h2> data de nascimento {{$data_nasc}}</h2>
<p>HTML{{$html}}</p>
<p>HTML Intepretado{!!$html!!}</p>
<h4>{{$nome == 'Paulo'?'SIM':'Não'}}</h4>

@if($nome == 'Paulo')
    <h4>é Paulo</h4>
@elseif($nome == 'Pedro')
    <h5>Não é Paulo</h5>
@else
    <h5>É {{$nome}}</h5>
@endif

@for($i=1;$i <= 10;$i++ )
    <p>Valor de i é {{$i}}</p>
@endfor

@for($i=0; $i < count($ingredientes); $i++ )
    <p>ingredientes:      {{$ingredientes[$i]}}</p>
@endfor


<ul>
    @foreach ($ingredientes as $ingrediente)
        <li>
            {{ $ingrediente }} -
            @component('components.botao') Editar
                @slot('cor')
                    green
            @endslot
            @slot('href')
                https://goolgle.com.br
            @endslot
            @endcomponent
            @component('components.botao') Deletar
            @slot('cor')
                red
            @endslot
            @slot('href')
                https://9gag.com
            @endslot
            @endcomponent
        </li>
    @endforeach
</ul>
</body>
</html>

