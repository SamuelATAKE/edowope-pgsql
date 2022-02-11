@extends('layouts.admin')

@section('content')

<div class="col-lg-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ajouter un membre de l'administration</h4>
        <br/>
        {{-- <p class="card-description"> Basic form elements </p> --}}
        <form class="forms-sample" action="#" method="POST">
          <div class="form-group">
            <label for="exampleInputName1">Nom</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom" name="nom">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Prénom(s)</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Prénom(s)" name="prenom">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Adresse mail" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Définir un mot de passe de connexion" name="password">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Genre</label>
            <select class="form-control" id="exampleSelectGender">
              <option>Masculin</option>
              <option>Féminin</option>
            </select>
          </div>
          {{-- <div class="form-group">
            <label for="exampleSelectGender">Administration</label>
            <select class="form-control" id="exampleSelectGender">
              <option>Ministère de l'éducation</option>
              <option>Ministère de la décentralisation</option>
              <option>Ministère de l'artisanat</option>
            </select>
        </div> --}}
        <div class="form-group">
            <label for="exampleInputPassword4">Fonction</label>
            <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Quel poste occupe ce membre?" name="fonction">
        </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Ajouter</button>
          <button class="btn btn-light">Retour</button>
        </form>
      </div>
    </div>
  </div>

@endsection
