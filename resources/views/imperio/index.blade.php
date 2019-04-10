@extends('layouts.app_imperio')
@section('content')


<!-- start banner Area -->
<section class="banner-area relative" id="home">
<div class="overlay overlay-bg"></div>
<div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-12 col-md-12">
            <h6 class="text-uppercase">Don’t look further, here is the key</h6>
            <h1>
                We’re Industrial solution			
            </h1>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt.
            </p>
            <a href="#" class="primary-btn header-btn text-uppercase">Get Started</a>
        </div>												
    </div>
</div>
</section>
<!-- End banner Area -->

<!-- Start cat Area -->
<section class="cat-area section-gap" id="feature">
<div class="container">							
    <div class="row">
        <div class="col-lg-4">	
            <div class="single-cat d-flex flex-column">
                <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
                <h4 class="mb-20" style="margin-top: 23px;">Maintenance</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                </p>
            </div>															
        </div>
        <div class="col-lg-4">	
            <div class="single-cat">
                <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
                <h4 class="mt-40 mb-20">Residental Service</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                </p>
            </div>															
        </div>
        <div class="col-lg-4">
            <div class="single-cat">
                <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
                <h4 class="mt-40 mb-20">Commercial Service</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                </p>
            </div>							
        </div>
    </div>
</div>	
</section>
<!-- End cat Area -->		


<!-- Start home-about Area -->
<section class="home-about-area section-gap" id="about">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-12 home-about-left">
            <h6>Brand new app to blow your mind</h6>
            <h1>
                We’ve made a life <br>
                that will change you
            </h1>
            <p class="sub">We are here to listen from you deliver exellence</p>
            <p class="pb-20">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
            </p>
            <a class="primary-btn" href="#">Get Started Now</a>
        </div>
        <div class="col-lg-4 col-md-12 home-about-right relative">
            <form class="form-wrap" action="#">
                <h4 class="text-white pb-20">Entre em contato</h4>                
                <input type="text" class="form-control" placeholder="Nome" required>
                <input type="phone" class="form-control" placeholder="Telefone" required>
                <input type="email" class="form-control" placeholder="Email" required>
                <textarea name="message" id="" cols="30" rows="5" placeholder="Mensagem" class="form-control"></textarea>
                <button class="primary-btn">Enviar</button>
            </form>
        </div>
    </div>
</div>	
</section>
<!-- End home-about Area -->
    

<!-- Start service Area -->
<section class="service-area section-gap" id="products">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 pb-30 header-text text-center">
            <h1 class="mb-10">Nossos produtos</h1>
            <p>
                Trabalhamos com os melhores produtos pra você!
            </p>
        </div>
    </div>						
    <div class="row">
        <div class="col-lg-4">
            <div class="single-service text-justify">
                <div class="thumb">
                <img src="{{asset('img\imperio\telha_site.jpg')}}" alt="">									
                </div>
                <h4>Telhas Termoacústicas</h4>
                <p>
                    Composta por duas telhas trapezoidais formando um “sanduíche” com o núcleo em poliestireno (isopor) ou poliuretano, que se expandem e aderem perfeitamente ao aço, criando um produto novo, dotado de grande rigidez, de alta resistência térmica e de grande isolamento a ruídos externos.
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-service">
                <div class="thumb">
                    <img src="img/s2.jpg" alt="">									
                </div>
                <h4>Construction & Engineering</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-service">
                <div class="thumb">
                    <img src="img/s3.jpg" alt="">									
                </div>
                <h4>Industrial Engineering</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                </p>
            </div>
        </div>												
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="single-service text-justify">
                <div class="thumb">
                <img src="{{asset('img\imperio\telha_site.jpg')}}" alt="">									
                </div>
                <h4>Telhas Termoacústicas</h4>
                <p>
                    Composta por duas telhas trapezoidais formando um “sanduíche” com o núcleo em poliestireno (isopor) ou poliuretano, que se expandem e aderem perfeitamente ao aço, criando um produto novo, dotado de grande rigidez, de alta resistência térmica e de grande isolamento a ruídos externos.
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-service">
                <div class="thumb">
                    <img src="img/s2.jpg" alt="">									
                </div>
                <h4>Construction & Engineering</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-service">
                <div class="thumb">
                    <img src="img/s3.jpg" alt="">									
                </div>
                <h4>Industrial Engineering</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                </p>
            </div>
        </div>												
    </div>
</div>	
</section>
<!-- End service Area -->


<!-- Start faq Area -->
<section class="faq-area section-gap relative">
<div class="overlay overlay-bg"></div>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-3 col-md-6">
            <div class="single-faq">
                <div class="circle">
                  <div class="inner"></div>
                </div>
                <h5><span class="counter">2</span>K+</h5>
                <p>
                    Projects Completed
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-faq">
                <div class="circle">
                  <div class="inner"></div>
                </div>
                <h5><span class="counter">5.5</span>K</h5>
                <p>
                    Total Employees
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-faq">
                <div class="circle">
                  <div class="inner"></div>
                </div>
                <h5 class="counter">959</h5>
                <p>
                    Happy Clients
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single-faq">
                <div class="circle">
                  <div class="inner"></div>
                </div>
                <h5 class="counter">367</h5>
                <p>
                    Tickets Submited
                </p>
            </div>
        </div>																		
    </div>
</div>	
</section>
<!-- End faq Area -->


<!-- Start project Area -->
<section class="project-area section-gap" id="project">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pb-30 header-text text-center">
            <h1 class="mb-10">Latest Finished Projects</h1>
            <p>
                Who are in extremely love with eco friendly system..
            </p>
        </div>
    </div>						
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <a href="img/p1.jpg" class="img-gal">
                <img class="img-fluid single-project" src="img/p1.jpg" alt="">
            </a>	
        </div>
        <div class="col-lg-4 col-md-4">
            <a href="img/p2.jpg" class="img-gal">
                <img class="img-fluid single-project" src="img/p2.jpg" alt="">
            </a>	
        </div>						
        <div class="col-lg-6 col-md-6">
            <a href="img/p3.jpg" class="img-gal">
                <img class="img-fluid single-project" src="img/p3.jpg" alt="">
            </a>	
        </div>
        <div class="col-lg-6 col-md-6">
            <a href="img/p4.jpg" class="img-gal">
                <img class="img-fluid single-project" src="img/p4.jpg" alt="">
            </a>	
        </div>		
    </div>
</div>	
</section>
<!-- End project Area -->
        
<!-- Start feedback Area -->
<section class="feedback-area section-gap relative" id="feedback">
<div class="overlay overlay-bg"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 pb-30 header-text text-center">
            <h1 class="mb-10 text-white">Enjoy our Client’s Feedback</h1>
            <p class="text-white">
                Who are in extremely love with eco friendly system..
            </p>
        </div>
    </div>			
    <div class="row feedback-contents justify-content-center align-items-center">
        <div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
            <div class="overlay overlay-bg"></div>
            <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-btn.png" alt=""></a>
        </div>
        <div class="col-lg-6 feedback-right">
            <div class="active-review-carusel">
                <div class="single-feedback-carusel">
                    <div class="title d-flex flex-row">
                        <h4 class="text-white pb-10">Fannie Rowe</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>								
                        </div>										
                    </div>
                    <p class="text-white">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-feedback-carusel">
                    <div class="title d-flex flex-row">
                        <h4 class="text-white pb-10">Fannie Rowe</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>								
                        </div>										
                    </div>
                    <p class="text-white">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-feedback-carusel">
                    <div class="title d-flex flex-row">
                        <h4 class="text-white pb-10">Fannie Rowe</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked	"></span>								
                        </div>										
                    </div>
                    <p class="text-white">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>																
            </div>
        </div>
    </div>
</div>	
</section>
<!-- End feedback Area -->


<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 pb-30 header-text">
            <h1>Latest posts from our Blog</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
            </p>
        </div>
    </div>
    <div class="row">	
        <div class="single-blog col-lg-4 col-md-4">
            <div class="thumb">
                <img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">	
            </div>
            <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <img class="img-fluid" src="img/user.png" alt="">
                    <a href="#"><span>Mark Wiens</span></a>
                </div>
                <div class="meta">
                    13th Dec
                    <span class="lnr lnr-heart"></span> 15
                    <span class="lnr lnr-bubble"></span> 04
                </div>
            </div>							
            <a href="#">
                <h4>Portable Fashion for young women</h4>
            </a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
            </p>
        </div>
        <div class="single-blog col-lg-4 col-md-4">
            <div class="thumb">
                <img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">	
            </div>
            <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <img class="img-fluid" src="img/user.png" alt="">
                    <a href="#"><span>Mark Wiens</span></a>
                </div>
                <div class="meta">
                    13th Dec
                    <span class="lnr lnr-heart"></span> 15
                    <span class="lnr lnr-bubble"></span> 04
                </div>
            </div>							
            <a href="#">
                <h4>Portable Fashion for young women</h4>
            </a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
            </p>
        </div>
        <div class="single-blog col-lg-4 col-md-4">
            <div class="thumb">
                <img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">	
            </div>
            <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <img class="img-fluid" src="img/user.png" alt="">
                    <a href="#"><span>Mark Wiens</span></a>
                </div>
                <div class="meta">
                    13th Dec
                    <span class="lnr lnr-heart"></span> 15
                    <span class="lnr lnr-bubble"></span> 04
                </div>
            </div>							
            <a href="#">
                <h4>Portable Fashion for young women</h4>
            </a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
            </p>
        </div>												
                            
                                
    </div>
</div>	
</section>
<!-- end blog Area -->	
<script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
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
@endsection