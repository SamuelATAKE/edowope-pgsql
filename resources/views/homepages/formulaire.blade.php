@extends('layouts.default')

@section('content')
<br>
<br>
<br>
<br>
<h2>Veuillez remplir le formulaire de dépôt</h2>
<hr/>
<form class="form" method="post" action="{{route('dossier.store')}}" enctype="multipart/form-data">
    @csrf
    @method('post')
    <input class="input-text animated wow flipInY delay-02s" type="text" placeholder="Votre nom *"   name="nom">
    <input class="input-text animated wow flipInY delay-02s" type="text" placeholder="Votre prénom *"   name="prenom">
    <input class="input-text animated wow flipInY delay-04s" type="email" placeholder="Votre adresse mail *"   name="email">
    <input class="input-text animated wow flipInY delay-04s" type="tel" placeholder="Votre numéro de téléphone *"   name="telephone">
    <input class="input-text animated wow flipInY delay-04s" type="text" placeholder="Votre profession *"   name="profession">
    <label class="form-label">Genre</label>
    <select class="form-control" name="genre">
      <option value="Feminin">Féminin</option>
      <option value="Masculin">Masculin</option>
    </select>
    <br/>
    <label class="form-label">Type de dossier</label>
    <select class="form-control" name="type">
      <option value="Personnel">Personnel</option>
      <option value="Administratif">Administratif</option>
    </select>
    @if(!session('service'))
        <br/>
        <label class="form-label">Service(Administration)</label>
        <select class="form-control" name="administration">
            @foreach ($services as $service)
                <option value="{{$service->id}}">{{$service->nom}}</option>
            @endforeach
        </select>
    @endif

  <br/>
    <input class="form-control" type="file" name="document"/>
  <br/>
    <textarea class="input-text text-area animated wow flipInY delay-06s" cols="0" rows="0" placeholder="Contenu du dossier *"  name="contenu"></textarea>
    <input class="input-text animated wow flipInY delay-04s" type="text" placeholder="Motif du dépôt *"   name="motif">
    <textarea class="input-text text-area animated wow flipInY delay-06s" cols="0" rows="0"   name="commentaire" placeholder="Un commentaire...?"></textarea>
    <input class="input-btn animated wow flipInY delay-08s" type="submit" value="Faire le dépôt">
</form>
  <br>
  <br>
  <br>

@endsection
