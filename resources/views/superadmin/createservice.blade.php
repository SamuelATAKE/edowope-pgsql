@extends('layouts.superadmin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ajouter un service administratif</h4>
        {{-- <p class="card-description">
          Basic form elements
        </p> --}}
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('service.store')}}">
            @csrf
            @method('POST')
          <div class="form-group">
            <label for="exampleInputName1">Nom</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom du service administratif" name="nom">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Adresse mail du service" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Numéro de téléphone du service administratif</label>
            <input type="tel" class="form-control" id="exampleInputEmail3" placeholder="Contact téléphonique" name="telephone">
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
          </div> --}}
          <div class="form-group">
            <label for="exampleSelectGender">Type de service</label>
              <select class="form-control" id="exampleSelectGender" name="type">
                <option value="public">Public (Etatique)</option>
                <option value="private">Privé</option>
              </select>
            </div>
          <div class="form-group">
            <label>Importer le logo</label>
            {{-- <input type="file" name="img[]" class="file-upload-default"> --}}
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" placeholder="Importer votre logo" name="logo">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Téléverser</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Ville</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Ville de résidence" name="ville">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Description des activités menées au sein du service</label>
            <textarea class="form-control" id="exampleTextarea1"  rows="10" name="description"></textarea>
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
