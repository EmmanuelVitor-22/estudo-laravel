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
{{--recebe o conteudo de fora--}}
@section('content')
    conteudo padrao
    {{--renderiza conteudo--}}
@show
{{--ps: nesse caso não fecha com o end section, só fecha qndo a gente ta criando uma sessão--}}
{{--nesse caso ta só renderizando--}}
</body>
</html>
