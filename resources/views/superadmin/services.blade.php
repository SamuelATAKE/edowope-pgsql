@extends('layouts.superadmin')

@section('content')

<div class="col-lg-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Services administratifs</h4>
        {{-- <p class="card-description">
          Add class <code>.table-striped</code>
        </p> --}}
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  Logo
                </th>
                <th>
                  Nom du service
                </th>
                <th>
                  Nombre de dépôts
                </th>
                <th>
                  Nombre de dossiers en<br/> cours de traitement
                </th>
                <th>
                  Nombre de dossiers traités
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <td class="py-1">
                    <img src="{{asset($service->logo)}}" alt="image"/>
                    </td>
                    <td>
                    {{$service->nom}}
                    </td>
                    <td>
                    25
                    </td>
                    <td>
                    79
                    </td>
                    <td>
                    15
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
