@extends('layouts.superadmin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ajouter administrateur</h4>
        {{-- <p class="card-description">
          Basic form elements
        </p> --}}
        <form class="forms-sample" method="POST" action="{{route('admin.store')}}">
            @csrf
            @method('post')
          <div class="form-group">
            <label for="exampleInputName1">Nom</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom de l'administrateur" name="nom">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Prénom(s)</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Prénom(s) de l'administrateur" name="prenom">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Adresse mail de l'administrateur" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Mot de passe de l'administrateur" name="password">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Numéro de téléphone</label>
            <input type="tel" class="form-control" id="exampleInputName1" placeholder="Numéro de téléphone de l'administrateur" name="telephone">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Fonction</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Fonction de l'administrateur" name="fonction">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Administration</label>
              <select class="form-control" id="exampleSelectGender" name="administration">
                  @foreach ($services as $service)
                      <option value="{{$service->id}}">{{$service->nom}}</option>
                  @endforeach
              </select>
            </div>
          <button type="submit" class="btn btn-primary me-2">Ajouter</button>
          <button class="btn btn-light">Retour</button>
        </form>
      </div>
    </div>
  </div>
      </div>
    </div>
</div>

@endsection
