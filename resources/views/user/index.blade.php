{{--
@extends permite "estender" um modelo, que define suas próprias seções, etc.
 --}}
{{--Um modelo que você pode estender definirá suas próprias seções usando @yield, --}}
{{--nas quais você poderá colocar seus próprios itens em seu arquivo de visualização.--}}

{{--Ou seja, podem ser empilhados/colocados varios conteudos --}}
{{--usado com css, scripts, ou varios outros conteudos que tenham a nescessidade de serem renderizados varias vezes--}}
@extends('layouts.default')

@section('title', 'Lista')
{{--dar um push pro fim da pilha--}}
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush
{{--dar um push pro inicio da pilha--}}
@prepend('scripts')
    <script>
        let curso = 'laravel';
    </script>
@endprepend

@section('sidebar')
    {{--traz o conteudo herdados do pai--}}
    @parent
    <br>
    aqui fica os menus
@endsection

@section('content')
    @each('user.user',$users,'user')
@endsection




