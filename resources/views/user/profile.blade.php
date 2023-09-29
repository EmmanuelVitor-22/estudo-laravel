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
{{--ps: qndo se tem uma subview, ela herda do pai as propriedades e variaveis--}}
@include('heading', [
    'title' =>  'Usuarios'
])

{{--@foreach($users as $user)--}}
{{--    @include('user.user', [--}}
{{--     'usuario' => $user--}}
{{-- ])--}}
{{--@endforeach--}}

{{--Combina loops e inclusões em uma linha.
O primeiro argumento é a visão parcial a ser renderizada para cada elemento na matriz ou coleção.
O segundo argumento é a matriz ou coleção sobre a qual você deseja iterar, enquanto
O terceiro argumento é o nome da variável que será atribuída à iteração atual na exibição.
--}}
{{--ps: com essa diretiva não acontece de da filha herdar do pai--}}
{{--@each('user.user',$users,'user')--}}
</body>
</html>
