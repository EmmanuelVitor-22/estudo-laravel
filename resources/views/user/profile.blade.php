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
{{--diretiva for--}}
{{--@for($i=0; $i<10; $i++)--}}
{{--    {{$i}}--}}
{{--@endfor--}}

@foreach($users as $user)
    {{$user->name}} <br>

@endforeach

@forelse($users as $user)
{{--    funcioan exatamente como o foreach--}}
    {{$user->name}} <br>
{{--porem tem essa tratativa, caso não mexista registros--}}
@empty
    <p>Não há usuario</p>
@endforelse


@while($variavel)
{{--   logica do while--}}
@endwhile

</body>
</html>
