@extends('layouts.default')

@section('title', 'Lista')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')

    <x-user.user-list
        :users="$users"
        {{-- caso estivessemso usando um javascript, num vue.js por exemplo, seria uma sintaxe parecida,--}}
        {{-- para o blade fazer o escape e não se confundir, usase ::class-card = "{'danger' : isSelected}"--}}
        type="card"
    />

@endsection




