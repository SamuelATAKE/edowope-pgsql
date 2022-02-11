@extends('layouts.default')

@section('content')

<!--Top_content-->
<section id="top_content" class="top_cont_outer">
    <div class="top_cont_inner">
      <div class="container">
        <div class="top_content">
          <div class="row">
            <div class="col-lg-5 col-sm-7">
              <div class="top_left_cont flipInY wow animated">
                <h3>Plateforme de gestion administratives</h3>
                <h2>Déposer et suiver votre dossier du début du traitement jusqu'à la date de retrait</h2>
                <p> Evitez des déplacements inutiles! Dynamisons le traitement des dossiers</p>
                <a href="{{route('home.formulaire')}}" class="learn_more2">Déposer un dossier</a> </div>
            </div>
            <div class="col-lg-7 col-sm-5"> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Top_content-->

  <!--Service-->
  {{-- <section  id="service">
    <div class="container">
      <h2>Services</h2>
      <div class="service_area">
        <div class="row">
          <div class="col-lg-4">
            <div class="service_block">
              <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa-flash"></i></span> </div>
              <h3 class="animated fadeInUp wow">Quick TurnAround</h3>
              <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service_block">
              <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa-comments"></i></span> </div>
              <h3 class="animated fadeInUp wow">Friendly Support</h3>
              <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service_block">
              <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa-shield"></i></span> </div>
              <h3 class="animated fadeInUp wow">top Security</h3>
              <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--Service-->

  <section id="work_outer"><!--main-section-start-->
  <div class="top_cont_latest">
    <div class="container">
      <h2>Les avantages</h2>
      <div class="work_section">
        <div class="row">
          <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
            <div class="service-list">
              <div class="service-list-col1"> <i class="icon-doc"></i> </div>
              <div class="service-list-col2">
                <h3>Suivi du dossier</h3>
                <p>Soyez informé de l'évolution de votre dossier du début jusqu'à la fin...</p>
              </div>
            </div>
            <div class="service-list">
              <div class="service-list-col1"> <i class="icon-comment"></i> </div>
              <div class="service-list-col2">
                <h3>Notifications</h3>
                <p>Recevez des notifications sur votre date de rerait ou pour d'éventuels contentieux</p>
              </div>
            </div>
            <div class="service-list">
              <div class="service-list-col1"> <i class="icon-database"></i> </div>
              <div class="service-list-col2">
                <h3>Stockage</h3>
                <p>Votre dossier est retraçable quelque soit la date de dépôt</p>
              </div>
            </div>
            <div class="service-list">
              <div class="service-list-col1"> <i class="icon-cog"></i> </div>
              <div class="service-list-col2">
                <h3>Configurations</h3>
                <p>L'administration configure de manière judicieuse les dossiers<br/> pour leur traitement</p>
              </div>
            </div>
            <div class="work_bottom"> <span>Avez-vous des suggestions ou questions?</span> <a href="#contact" class="contact_btn">Contactez-nous</a> </div>
          </div>
          <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>
        </div>
      </div>
    </div>
    <!--<div class="work_pic"><img src="home/img/dashboard_pic.png" alt=""></div>-->
    </div>
  </section>
  <!--main-section-end-->

  <!--new_portfolio-->

  <!--new_portfolio-->

  <section class="main-section paddind" id="Portfolio">
      <div class="container">
          <h2>Suivez votre dossier</h2>

          <form class="form" method="post" action="{{route('dossier.suivre')}}">
              @csrf
              @method('post')
              <div class="row">
                  <div class="col-lg-10"><input type="text" class="form-control" name="codedepot" placeholder="Entrez le code d'application de votre dossier..."/></div>
                  <div class="col-lg-2"><button class="btn btn-lg btn-primary" types="submit">Suivre mon dossier</button></div>
              </div>
            </form>
      </div>


  </section>

  {{-- <section class="main-section" id="client_outer"><!--main-section client-part-start-->
    <h2>Happy Clients</h2>
    <div class="client_area ">
      <div class="client_section animated  fadeInUp wow">
        <div class="client_profile">
          <div class="client_profile_pic"><img src="home/img/client-pic1.jpg" alt=""></div>
          <h3>Saul Goodman</h3>
          <span>Lawless Inc</span> </div>
        <div class="quote_section">
          <div class="quote_arrow"></div>
          <p><b><img src="home/img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="home/img/quote_sign_right.png" alt=""></small> </p>
        </div>
        <div class="clear"></div>
      </div>
      <div class="client_section animated  fadeInDown wow">
        <div class="client_profile flt">
          <div class="client_profile_pic"><img src="home/img/client-pic2.jpg" alt=""></div>
          <h3>Marie Schrader</h3>
          <span>DEA Foundation</span> </div>
        <div class="quote_section flt">
          <div class="quote_arrow2"></div>
          <p><b><img src="home/img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="home/img/quote_sign_right.png" alt=""></small> </p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section> --}}
  <!--main-section client-part-end-->

  {{-- <div class="c-logo-part"><!--c-logo-part-start-->
    <div class="container">
      <ul class="delay-06s animated  bounce wow">
        <li><a href="javascript:void(0)"><img src="home/img/c-liogo1.png" alt=""></a></li>
        <li><a href="javascript:void(0)"><img src="home/img/c-liogo2.png" alt=""></a></li>
        <li><a href="javascript:void(0)"><img src="home/img/c-liogo3.png" alt=""></a></li>
        <li><a href="javascript:void(0)"><img src="home/img/c-liogo5.png" alt=""></a></li>
      </ul>
    </div>
  </div> --}}
  <!--c-logo-part-end-->


  {{-- <section class="twitter-feed"><!--twitter-feed-->
    <div class="container  animated fadeInDown delay-07s wow">
      <div class="twitter_bird"><span><i class="fa-twitter"></i></span></div>
      <p> When you're the underdog, your only option is to make #waves if you want to succeed. How much <br>
        and how often should you be drinking coffee?</p>
      <span>About 28 mins ago</span> </div>
  </section> --}}
  <!--twitter-feed-end-->

@endsection
