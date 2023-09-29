<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    Basta nas view utilizar um @push e passar o conteúdo, que será implicado no @stack do template.--}}
    @stack('css')
    <title>@yield('title', 'Laravel')</title>
</head>
<body>

@section('sidebar')
    menus
@show

@yield('content')


</body>
</html>
