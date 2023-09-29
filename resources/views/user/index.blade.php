{{--
@extends permite "estender" um modelo, que define suas próprias seções, etc.
 --}}
{{--Um modelo que você pode estender definirá suas próprias seções usando @yield, --}}
{{--nas quais você poderá colocar seus próprios itens em seu arquivo de visualização.--}}
@extends('layouts.default')

@section('title', 'Lista')

@section('sidebar')
    {{--traz o conteudo herdados do pai--}}
    @parent
    <br>
    aqui fica os menus
@endsection


@section('content')
@each('user.user',$users,'user')
@endsection




