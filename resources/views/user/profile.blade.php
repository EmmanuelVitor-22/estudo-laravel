<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{count($users)}}<br>


@foreach($users as $user)
    {{--    variavel do blade com todas as informações do loop--}}
    {{--    @dd($loop)--}}

    @if($loop->odd)
        {{-- mostra so os itens inpares--}}
        {{$user->id}}{{$user->name}} <br>
    @endif
    {{--    {{$user->id}}{{$user->name}} <br>--}}
@endforeach


</body>
</html>
