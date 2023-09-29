<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel')</title>
</head>
<body>
{{--recebe o conteudo de fora--}}
@section('sidebar')
    menus
    {{--renderiza conteudo--}}
@show
{{--ps: nesse caso não fecha com o end section, só fecha qndo a gente ta criando uma sessão--}}
{{--nesse caso ta só renderizando--}}



{{--ps: não tem muita diferença entre o yeld e a section:--}}
{{--1-  diferença é q o yeld não pode abrir um bloco de codigo dentro dele, mas a section sim--}}
{{--2 - diferenca não pode manter o valor padrão e trazer os valores novos. ja que não herda. Na section é possivel--}}
@yield('content')

{{--O yeld geralmente é usado em conteudos principais, title (por exemplo--}}
{{--O section geralmente é usado em blocos de codigo dentro da pagina, como sidebar, footer, etc--}}
</body>
</html>
