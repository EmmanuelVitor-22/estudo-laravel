
@extends('layouts.default')

@section('title', 'Lista')

@section('content')
{{--utilizando o componente q foi criado--}}
    <x-user/>

    @each('user.user',$users,'user')

@endsection




