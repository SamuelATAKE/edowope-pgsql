@extends('layouts.admin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Qr Code</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic tables</li> --}}
              </ol>
            </nav>
        </div>
        <div class="row">
            {!! QrCode::size(300)->color(0,0,255)->generate('https://e-gestionadmin.000webhostapp.com/public/service-depot?_method=post&service='.session('service')); !!}
        </div>
    </div>

</div>

@endsection
