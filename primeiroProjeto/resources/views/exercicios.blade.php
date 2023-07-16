<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicios 1</title>
</head>
<body>
@foreach($pessoas as $pessoa)
    <div class="card">
        @component('components.cards')  {{$pessoa['image']}}
                @slot('nome')
                    {{$pessoa['nome']}}
                @endslot
        @slot('birth')
            {{$pessoa['birth']}}
        @endslot

        @slot('idade')
            {{$pessoa['idade']}}
        @endslot

        @endcomponent
    </div>
@endforeach

@for($i=1; $i <= 50;  $i++)
    <ul>
        <li><img src="{{$url}}{{$numero=$i}}"></li>
    </ul>
    @endfor
</body>
</html>
