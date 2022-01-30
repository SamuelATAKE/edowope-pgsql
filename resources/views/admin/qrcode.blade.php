@extends('layouts.admin')

@section('content')

<div class="container">
    {!! QrCode::size(400)->color(0,0,255)->generate('https://e-gestionadmin.000webhostapp.com/public/service-depot?_method=post&service='.session('service')); !!}

</div>

@endsection
