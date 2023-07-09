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
</body>
</html>

