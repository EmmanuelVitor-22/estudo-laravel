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
{{--diretiva php, usada geralmente para casos onde precisamos fazer codigo php dentro do blade--}}
@php
$count = count($users);
@endphp

@include()
</body>
</html>
