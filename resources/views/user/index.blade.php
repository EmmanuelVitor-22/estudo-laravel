@extends('layouts.default')

@section('title', 'Lista')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')
    {{--    obs, se tiver usando camelCase, usar o kebab-case--}}
    {{--se itver dendo de uma subpasta chama subpasta e depois do ponto o nome da pasta em si--}}
    <x-user.user-list type="card"/>



@endsection




