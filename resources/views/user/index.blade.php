@extends('layouts.default')

@section('title', 'Lista')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')

    <x-user.user-list
        {{-- caso queira usar o camelCase no componente, cria um atributo na classe do componente,
   mas no componente precisa ser no modo kebab-case--}}
        card-class="warning"
        :users="$users"
        type="card"

    />

@endsection



