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
{{count($users)}}

{{--diretivas if e else fluxo comum--}}
@if(count($users)===1)
    <p>Eu tenho um usuario</p>
@elseif(count($users)>1)
    <p>Eu tenho mais de um usuario</p>
@else
    <p>Eu não tenho usuario</p>
@endif


{{--Diretivas if e else usando negação--}}
@unless(count($users))
{{--    equivale a negação do if: @if(!count($users)===1)--}}
    <p>unless:Eu não tenho usuario</p>
@endunless

{{--utilizado para checar se existe   --}}
@isset($user)
<p>Variavel existe</p>
@endisset

{{--utilizado para checar se está vazio   --}}
@empty($user)
<p>Variavel está vazio</p>
@endempty

</body>
</html>
