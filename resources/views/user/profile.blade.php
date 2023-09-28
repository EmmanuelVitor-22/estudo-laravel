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
    @if($user->id ===1)
{{--        vai serguir o fluxo e ignorar o elemento com esse id--}}
{{--        basicamente é a mesma ideia do switch/case--}}
        @continue
    @endif

    {{$user->name}} <br>

    @if($user->id ===7)
        {{--        vai parar o fluxo e ignorar ao chegar nesse elemento--}}
        {{--        basicamente é a mesma ideia do switch/case--}}
        @break
    @endif



@endforeach


</body>
</html>
