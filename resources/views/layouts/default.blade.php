<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Plateforme de gestion administrative</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="home/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="{{asset('home/css/style.css')}}" rel="stylesheet" type="text/css">
<link href="home/css/linecons.css" rel="stylesheet" type="text/css">
<link href="home/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="home/css/responsive.css" rel="stylesheet" type="text/css">
<link href="home/css/animate.css" rel="stylesheet" type="text/css">
@yield('style')

<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="home/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="home/js/bootstrap.js"></script>
<script type="text/javascript" src="home/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="home/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="home/js/jquery.isotope.js"></script>
<script type="text/javascript" src="home/js/wow.js"></script>
<script type="text/javascript" src="home/js/classie.js"></script>

<!--[if lt IE 9]>
    <script src="home/js/respond-1.1.0.min.js"></script>
    <script src="home/js/html5shiv.js"></script>
    <script src="home/js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)
			});

	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });

	  });


		    });
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>
</head>
<body>

<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="{{route('home')}}"><img src="{{asset('home/img/logo.jpg')}}" alt=""></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="{{route('home')}}">Accueil</a></li>
          <li><a href="{{route('home.administrations')}}">Administrations</a></li>
          <li><a href="{{route('home.about')}}">A propos</a></li>
          <li><a href="{{route('home')}}#contact">Contact</a></li>
        </ul>
        <ul class="">
          <li><a href="{{route('home')}}">Accueil</a></li>
          <li><a href="{{route('home.administrations')}}">Administrations</a></li>
          <li><a href="{{route('home.about')}}">A propos</a></li>
          <li><a href="{{route('home')}}#contact">Contact</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section-->

@yield('content')



<footer class="footer_section" id="contact">
    <div class="container">
      <section class="main-section contact" id="contact">
        <div class="contact_section">
          <h2>Contactez-nous</h2>
          <div class="row">
            <div class="col-lg-4">
              <div class="contact_block">
                <div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
                <span> Quartier Agoè, Lomé, <br>
                    308 Boulevard de la Kara </span> </div>
            </div>
            <div class="col-lg-4">
              <div class="contact_block">
                <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
                <span> +228 00000000 </span> </div>
            </div>
            <div class="col-lg-4">
              <div class="contact_block">
                <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
                <span> <a href="mailto:hello@butterfly.com"> info@platgestadmin.com</a> </span> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 wow fadeInLeft">
            <div class="contact-info-box address clearfix">
              <h3>Ecrivez-nous</h3>
              {{-- <p>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper. Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>
              <p>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquampor id.</p> --}}
            </div>
            <ul class="social-link">
              <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
              <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
              <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa-pinterest"></i></a></li>
              <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
              <li class="dribbble animated bounceIn wow delay-06s"><a href="javascript:void(0)"><i class="fa-dribbble"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-6 wow fadeInUp delay-06s">
            <div class="form">
              <input class="input-text animated wow flipInY delay-02s" type="text" name="" value="Votre nom *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
              <input class="input-text animated wow flipInY delay-04s" type="text" name="" value="Votre adresse mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
              <textarea class="input-text text-area animated wow flipInY delay-06s" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Votre message *</textarea>
              <input class="input-btn animated wow flipInY delay-08s" type="submit" value="Envoyer un message">
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="footer_bottom"> <span>Copyright © 2021 Plateforme de gestion administrative </div>
    </div>
  </footer>

  @include('sweetalert::alert')

  <script type="text/javascript">
      $(document).ready(function(e) {
          $('#header_outer').scrollToFixed();
          $('.res-nav_click').click(function(){
              $('.main-nav').slideToggle();
              return false

          });

      });
  </script>
  <script>
      wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100
        }
      );
      wow.init();
      document.getElementById('').onclick = function() {
        var section = document.createElement('section');
        section.className = 'wow fadeInDown';
        section.className = 'wow shake';
        section.className = 'wow zoomIn';
        section.className = 'wow lightSpeedIn';
        this.parentNode.insertBefore(section, this);
      };
    </script>
  <script type="text/javascript">
      $(window).load(function(){

          $('a').bind('click',function(event){
              var $anchor = $(this);

              $('html, body').stop().animate({
                  scrollTop: $($anchor.attr('href')).offset().top - 91
              }, 1500,'easeInOutExpo');
              /*
              if you don't want to use the easing effects:
              $('html, body').stop().animate({
                  scrollTop: $($anchor.attr('href')).offset().top
              }, 1000);
              */
              event.preventDefault();
          });
      })
  </script>

  <script type="text/javascript">


    jQuery(document).ready(function($){
  // Portfolio Isotope
      var container = $('#portfolio-wrap');


      container.isotope({
          animationEngine : 'best-available',
            animationOptions: {
               duration: 200,
               queue: false
             },
          layoutMode: 'fitRows'
      });

      $('#filters a').click(function(){
          $('#filters a').removeClass('active');
          $(this).addClass('active');
          var selector = $(this).attr('data-filter');
            container.isotope({ filter: selector });
          setProjects();
            return false;
      });


          function splitColumns() {
              var winWidth = $(window).width(),
                  columnNumb = 1;


              if (winWidth > 1024) {
                  columnNumb = 4;
              } else if (winWidth > 900) {
                  columnNumb = 2;
              } else if (winWidth > 479) {
                  columnNumb = 2;
              } else if (winWidth < 479) {
                  columnNumb = 1;
              }

              return columnNumb;
          }

          function setColumns() {
              var winWidth = $(window).width(),
                  columnNumb = splitColumns(),
                  postWidth = Math.floor(winWidth / columnNumb);

              container.find('.portfolio-item').each(function () {
                  $(this).css( {
                      width : postWidth + 'px'
                  });
              });
          }

          function setProjects() {
              setColumns();
              container.isotope('reLayout');
          }

          container.imagesLoaded(function () {
              setColumns();
          });


          $(window).bind('resize', function () {
              setProjects();
          });

  });
  $( window ).load(function() {
      jQuery('#all').click();
      return false;
  });
  </script>
  </body>
  </html>
