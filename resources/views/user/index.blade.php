@extends('layouts.default')

@section('title', 'Lista')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')

    <x-user.user-list
        card-class="warning"
        :users="$users"
        type="card"
        class="bg-danger"
    />
    <x-form.button
        type="submit"
        nome="Salvar"
{{--        aqui ele esta verdadeiro--}}
        isRed
{{--        se eu fizer :isRed="false" ele muda a pripriedade--}}
        class="mt-2">
    </x-form.button>

@endsection




