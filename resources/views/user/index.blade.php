@extends('layouts.default')

@section('title', 'Lista')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')

    <x-user.user-list
        {{-- Forma de passar os dados de forma dinamica.
        Permite acesso interno ao que é passado--}}
        {{-- :significa q esta passando uma variavel--}}
        :users="$users"
        type="card"
    />

@endsection




