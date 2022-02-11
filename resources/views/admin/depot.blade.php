@extends('layouts.admin')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Liste des dépôts à valider </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic tables</li> --}}
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Dépôts journaliers</h4>
              <p class="card-description"> Veuillez vérifier la conformité des dossiers physiques <code> avant de valider le dépôt</code>
              </p>
              <table class="table">
                <thead>
                  <tr>
                    <th>Date et heure</th>
                    <th>Nom et prénom du déposeur</th>
                    <th>Contenu du dossier</th>
                    <th>Motif de dépôt</th>
                    <th>Validation de dépôt</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($dossiers as $dossier)
                    <tr>
                        <td>{{$dossier->created_at}}</td>
                        <td>{{$dossier->nom}} {{$dossier->prenom}}</td>
                        <td><a href="{{route('dossier.details', $dossier->id)}}">{{$dossier->contenu}}</a></td>
                        <td>{{$dossier->motif}}</td>
                        <td>
                            <form action="{{route('depot.valider')}}" method="post">
                                @csrf
                                @method('post')
                                <input type="hidden" name="dossier" value="{{$dossier->id}}"/>
                                <button class="btn btn-primary btn-md" type="submit">Valider</button>
                            </form>
                            <button class="btn btn-danger btn-md">Rejeter</button>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
