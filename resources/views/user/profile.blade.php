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
{{--Em caso onde se queira que , por exemplo, o header ou componente seja para todas as paginas da aplicação--}}
{{--e se tenha nescessidades, por exemplo de passar dados por ele.--}}

{{--Por exemplo: cada item do array q é passado vira uma variavel--}}
{{--ps: então isso funciona também para outros formatos de include--}}

@include('heading', [
    'title' =>  'Usuarios'
])

@foreach($users as $user)
    @include('user.user', [
     'usuario' => $user
 ])
@endforeach

</body>
</html>
