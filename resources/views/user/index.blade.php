@extends('layouts.default')

@section('title', 'Lista')

@section('content')
    {{--    obs, se tiver usando camelCase, usar o kebab-case--}}
    {{--se itver dendo de uma subpasta chama subpasta e depois do ponto o nome da pasta em si--}}
    <x-user.user-list/>



@endsection




