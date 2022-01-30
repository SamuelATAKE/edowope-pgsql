@extends('layouts.admin')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Liste des dossiers prêts pour le traitement</h3>
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
              <h4 class="card-title">Dossiers à traiter</h4>
              <p class="card-description"> Veuillez revérifier l'état du dossier <code> avant de lancer le processus de traitement</code>
              </p>
              <table class="table">
                <thead>
                  <tr>
                    <th>Date et heure de dépôt</th>
                    <th>Nom et prénom du déposeur</th>
                    <th>Contenu du dossier</th>
                    <th>Motif de dépôt</th>
                    <th>Lancer le traitement</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($dossiers as $dossier)
                        <tr>
                            <td>{{$dossier->created_at}}</td>
                            <td>{{$dossier->nom}} {{$dossier->prenom}}</td>
                            <td>{{$dossier->contenu}}</td>
                            <td>{{$dossier->motif}}</td>
                            <td>
                                <form action="{{route('lancer.traitement')}}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="dossier" value="{{$dossier->id}}" />
                                    <button class="btn btn-primary btn-sm" type="submit">Traiter</button>
                                </form>
                                <button class="btn btn-danger btn-sm">Signaler un<br/> contentieux</button>
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
