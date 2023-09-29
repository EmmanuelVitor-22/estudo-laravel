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

@include('user.heading')


{{-- @includeIf = inclua se existir
{{-- @includeIf = inclua se existir
equivale a:
@if ('user.heading)
    @include('user.heading')
@endif
--}}
{{--@includeIf('user.heading')--}}

{{--Inclui quando algo for valido(no caso a condição for true--}}
{{-- equivale a isso:
@if ($user->ownsPost($post)
     @include('posts.edit-controls', ['post' => $post])
@endif
--}}
{{--@includeWhen(true,'user.heading')--}}

{{--Inclui quando na condição algo for falso(no caso a condição for falso--}}
{{--@includeUnless(false,'user.heading')--}}


{{--Inclui o primeiro valido que encontrar--}}
@includeFirst(['user.teste','user.heading'])

</body>
</html>
