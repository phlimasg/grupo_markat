<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6256562.js"></script>
    <!-- End of HubSpot Embed Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145404521-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-145404521-1');
    </script>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/img/imperio/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Telhas Império</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ url('public/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ url('public/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('public/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ url('public/css/nice-select.css') }}">	
        <link rel="stylesheet" href="{{ url('public/css/hexagons.min.css') }}">							
        <link rel="stylesheet" href="{{ url('public/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ url('public/css/main.css') }}">
        <script src="{{ url('public/js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="{{ url('public/js/vendor/bootstrap.min.js')}}"></script>	
    </head>
    <body id="mypage">
            <header id="header" id="home">
                    <div class="container main-menu">
                        <div class="row align-items-center justify-content-between d-flex">
                          <div id="logo">
                            <a href="{{url('/')}}"><img src="{{ asset('/img/imperio/logo_.png') }}" alt="" title="" /></a>
                          </div>
                          <nav id="nav-menu-container">
                            <ul class="nav-menu">
                              <li class="menu-active"><a href="{{url('/')}}">Início</a></li>
                              <li><a href="{{ route('produtos') }}">Produtos</a></li>
                              <li><a href="#about">Sobre</a></li>
                              <li><a href="#contacts">Contatos</a></li>                              
                            </ul>
                          </nav><!-- #nav-menu-container -->		    		
                        </div>
                    </div>
                    </header><!-- #header -->	

                    
          @yield('content')
            

        <!-- start footer Area -->		
        <footer class="footer-area section-gap" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Sobre</h6>
                            <p>
                              Telhas Império, é uma impresa do Grupo Markat, especializada em telhas termoacústicas, calhas, rufus, instalações, pintura eletrostática e acessórios.
                            </p>
                            <p class="footer-text" style="display:none">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>								
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Receba nossas novidades e promoções</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>

                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>						
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Siga-nos!</h6>
                            <p>Nossas redes sociais</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="https://facebook.com/telhasimperio"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/telhas_imperio/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>							
                </div>
            </div>
        </footer>	
        <!-- End footer Area -->	

        		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
          <script src="{{ url('public/js/easing.min.js')}}"></script>			
        <script src="{{ url('public/js/hoverIntent.js')}}"></script>
        <script src="{{ url('public/js/superfish.min.js')}}"></script>	
        <script src="{{ url('public/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{ url('public/js/jquery.magnific-popup.min.js')}}"></script>	
        <script src="{{ url('public/js/owl.carousel.min.js')}}"></script>	
        <script src="{{ url('public/js/hexagons.min.js')}}"></script>							
        <script src="{{ url('public/js/jquery.nice-select.min.js')}}"></script>	
        <script src="{{ url('public/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ url('public/js/waypoints.min.js')}}"></script>							
        <script src="{{ url('public/js/mail-script.js')}}"></script>	
        <script src="{{ url('public/js/main.js')}}"></script>	
        <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
        @yield('script')
        

<script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a,.container a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
      
      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;
    
          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })


    
    </script>
    </body>
</html>