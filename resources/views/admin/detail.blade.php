@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h3 class="page-title">
                        Nom et prénom(s) du déposeur
                    </h3>
                    <h6 class="card-text">{{$dossier->prenom}} {{$dossier->nom}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Email
                    </h3>
                    <h6 class="card-text">{{$dossier->email}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Numéro de téléphone
                    </h3>
                    <h6 class="card-text">{{$dossier->telephone}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Profession
                    </h3>
                    <h6 class="card-text">{{$dossier->profession}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Genre
                    </h3>
                    <h6 class="card-text">{{$dossier->genre}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Type de dossier
                    </h3>
                    <h6 class="card-text">{{$dossier->type}}</h6>
                    <hr/>
                    <iframe width="500" height="375"  src="{{asset('storage/'.$dossier->document)}}"></iframe>
                    {{-- <embed src="{{asset('storage/document/1-Rappel SQL.pdf')}}" width="500" height="375" type="application/pdf"> --}}
                    {{-- <object data="storage/document/1-Rappel SQL.pdf" type="application/pdf" width="750px" height="750px">
                        <embed src="{{asset('storage/document/1-Rappel SQL.pdf')}}" type="application/pdf">
                            <p>This browser does not support PDFs. Please download the PDF to view it: <a href="{{asset('storage/document/1-Rappel SQL.pdf')}}">Download PDF</a>.</p>
                        </embed>
                    </object> --}}
                    <hr/>
                    <h3 class="page-title">
                        Contenu du dossier
                    </h3>
                    <h6 class="card-text">{{$dossier->contenu}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Motif
                    </h3>
                    <h6 class="card-text">{{$dossier->Motif}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Commentaire
                    </h3>
                    <h6 class="card-text">{{{{$dossier->commentaire}}}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Code de dépôt
                    </h3>
                    <h6 class="card-text">{{{{$dossier->code_depot}}}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Etat
                    </h3>
                    <h6 class="card-text">{{{{$dossier->etat}}}}</h6>
                    <hr/>
                    <h3 class="page-title">
                        Date de dépôt
                    </h3>
                    <h6 class="card-text">{{{{$dossier->created_at}}}}</h6>
                    <hr/>
                </div>
              </div>
            </div>
        </div>

    </div>
</div>
@endsection
