@extends('layouts.default')

@section('content')
<br>
<br>
<br>
<br>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        @php
            $p = 0;
            if($dossier->etat == ''){
                $p=3;
            }else if($dossier->etat == 'traitements'){
                $p=33;
            }else if($dossier->etat == 'traitement'){
                $p=66;
            }else if($dossier->etat == 'retait'){
                $p=100;
            }
        @endphp

       <div class="progress">
           @if ($p == 0)
            <div class="progress-bar bg-warning" role="progressbar" style="width: 3%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>

           @endif
           @if ($p == 33)
           <div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>

          @endif
          @if ($p == 67)
          <div class="progress-bar bg-warning" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>

         @endif
            @if ($p == 100)
            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>

            @endif

        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        Dépôt
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        Lancé pour traitement
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        Traitement
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        Retrait disponible
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>
<br>
<br>
<br>
<br>
<section class="twitter-feed"><!--twitter-feed-->
    <div class="container  animated fadeInDown delay-07s wow">
      <div class="bell"><span><i class="fa-bell"></i></span></div>
      <p> Aucun message pour l'instant</p>
      <span>
          @if ($dossier->date_retrait)
            Vous pouvez passer retirer votre dossier à partir du: {{$dossier->date_retrait}}
          @endif
      </span>
    </div>
  </section>

@endsection
