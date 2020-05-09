@extends('layouts.app_imperio')
@section('content')




<!-- start banner Area -->
<section class="banner-area relative" id="home">
<div class="overlay overlay-bg"></div>
<div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-12 col-md-12">
            <h6 class="text-uppercase">As melhores telhas, você encontra aqui!</h6>
            <h1>
             O menor preço, pelo melhor produto!			
            </h1>
            <p class="text-white">
                Especializados em telhas galvalumes, temos o melhor material termoacústico do mercado.
            </p>
            <a href="{{ route('produtos') }}" class="primary-btn header-btn text-uppercase">Faça seu orçamento agora!</a>
        </div>												
    </div>
</div>
</section>
<!-- End banner Area -->


<!-- Start service Area -->
<section class="home-about-area section-gap" id="products">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10">Nossos produtos</h1>
                <p>
                    Trabalhamos com os melhores produtos pra você!
                </p>
            </div>
        </div> 
        <div class="row">
            @php($cont = 0)
            @forelse ($produtos as $produto)
                @if (!empty($produto->imagem))                    
                    <div class="col-md-2 text-center" style="background-color: rgb(245, 245, 245); padding: 5px; border: 2px solid white">
                        <a href="{{ route('show', ['id'=>$produto->id]) }}" class="single-service" style="color: inherit">
                            <div id="{{$produto->id}}" class="owl-carousel owl-theme">
                                <!-- Wrapper for slides -->
                                @foreach ($produto->imagem as $imagem)
                                      <div class="item">
                                        <img src="{{url('/public/storage').'/'.$imagem->url}}" alt="" style="max-height: 300px; max-width: 350px">
                                      </div>  
                                @endforeach
                            </div> 
                            <h4>{{$produto->nome}}</h4>
                            <div class="descricao">
                                <p>
                                    {{Strip_tags(mb_strimwidth($produto->descricao,0,25,'...'))}}
                                </p>

                            </div>
                        </a>                        
                        @if (Cookie::get('email'))
                            <button type="submit" class="primary-btn orcamento-btn text-uppercase"> <span class="lnr lnr-cart"></span> Adicionar</button>
                        @else
                            <a href="{{ route('cadastro') }}" class="orcamento-btn primary-btn text-uppercase btn-block"><span class="lnr lnr-cart"></span> Adicionar</a>                            
                        @endif

                    </div>
                    @php($cont++)
                    @if ($cont == 6)
                        </div>
                        <div class="row">
                        @php($cont=0)
                    @endif
                @else  
                Nenhuma imagem para exibir 
                @endif
            @empty
                Nenhum produto cadastrado
            @endforelse						
            
        </div>  
        <!--    
        <div class="row">
            <div class="col-lg-4">
                <div class="single-service text-justify">
                    <div class="thumb">
                    <img src="{{asset('public\img\imperio\telha_site.jpg')}}" alt="">									
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
                        <img src="public/img/s2.jpg" alt="">									
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
                        <img src="public/img/s3.jpg" alt="">									
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
                    <img src="{{asset('public\img\imperio\telha_site.jpg')}}" alt="">									
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
                        <img src="public/img/s2.jpg" alt="">									
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
                        <img src="public/img/s3.jpg" alt="">									
                    </div>
                    <h4>Industrial Engineering</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
            </div>												
        </div>
    -->
    
    </div>	
    </section>
    <!-- End service Area -->


<!-- Start cat Area -->
<section class="cat-area section-gap" id="feature">
<div class="container">							
    <div class="row">
        <div class="col-lg-4">	
            <div class="single-cat d-flex flex-column">
                <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
                <h4 class="mb-20" style="margin-top: 23px;">Aplicações Industriais</h4>
                <p>
                    Cobertura, estruturas e acessórios. 
                </p>
                <p>Tudo para montagem e manutenção do seu galpão industrial.</p>
            </div>															
        </div>
        <div class="col-lg-4">	
            <div class="single-cat">
                <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
                <h4 class="mt-40 mb-20">Aplicações Residenciais</h4>
                <p>
                    Variedade de cores,
calhas, rufus e acabamentos. 
                </p>
                <p>Sua casa com visual moderno e elegante. 
                    Mais de 20 opções de cores diferentes.</p>
            </div>															
        </div>
        <div class="col-lg-4">
            <div class="single-cat">
                <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
                <h4 class="mt-40 mb-20">Aplicações Prediais</h4>
                <p>
                    Tapumes, estruturas e coberturas.
                </p>
                <p>Excelentes soluções para construção civil.</p>
            </div>							
        </div>
    </div>
</div>	
</section>
<!-- End cat Area -->		


<!-- Start home-about Area -->
<section class="home-about-area section-gap" id="contacts">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-12 home-about-left">            
            <h1>
                Precisa de ajuda?
            </h1>
            <p class="sub">Nós da equipe Telhas Império, estamos sempre a disposição para tirar-mos todas as suas dúvidas.</p>
            <p class="sub">Entre em contato conosco utlizando o formulário ao lado, ou pelo Whatsapp no botão abaixo.</p>
            <br><br>
            <a class="primary-btn" href="#">Contato pelo Whastapp</a>
        </div>
        <div class="col-lg-4 col-md-12 home-about-right relative">
            <form novalidate="" accept-charset="UTF-8"
                action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/6256562/903a1608-65a1-4e38-9868-a892bb1db1cf"
                enctype="multipart/form-data" id="hsForm_903a1608-65a1-4e38-9868-a892bb1db1cf" method="POST"
                class="form-wrap hs-form stacked hs-form-private hs-form-903a1608-65a1-4e38-9868-a892bb1db1cf_63d3c937-e3de-4b8e-be99-08e3581e47d5"
                data-form-id="903a1608-65a1-4e38-9868-a892bb1db1cf" data-portal-id="6256562"
                target="target_iframe_903a1608-65a1-4e38-9868-a892bb1db1cf" data-reactid=".hbspt-forms-0">
                <h4 class="text-white pb-20">Entre em contato</h4>  
                <fieldset class="form-columns-1" data-reactid=".hbspt-forms-0.1:$0">
                    <div class="hs_email hs-email hs-fieldtype-text field hs-form-field"
                        data-reactid=".hbspt-forms-0.1:$0.1:$email">
                        
                        <legend class="hs-field-desc" style="display:none;"
                            data-reactid=".hbspt-forms-0.1:$0.1:$email.1"></legend>
                        <div class="input" data-reactid=".hbspt-forms-0.1:$0.1:$email.$email">
                            <input id="email-903a1608-65a1-4e38-9868-a892bb1db1cf" class="form-control invalid error"
                                type="email" name="email" required="" placeholder="Email" value="" autocomplete="email"
                                data-reactid=".hbspt-forms-0.1:$0.1:$email.$email.0">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-columns-2" data-reactid=".hbspt-forms-0.1:$1">
                    <div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field"
                        data-reactid=".hbspt-forms-0.1:$1.1:$firstname">                        
                        <legend class="hs-field-desc" style="display:none;"
                            data-reactid=".hbspt-forms-0.1:$1.1:$firstname.1"></legend>
                        <div class="input" data-reactid=".hbspt-forms-0.1:$1.1:$firstname.$firstname"><input
                                id="firstname-903a1608-65a1-4e38-9868-a892bb1db1cf" class="form-control" type="text"
                                name="firstname" value="" placeholder="Nome" autocomplete="given-name"
                                data-reactid=".hbspt-forms-0.1:$1.1:$firstname.$firstname.0"></div>
                    </div>
                    <div class="hs_phone hs-phone hs-fieldtype-text field hs-form-field"
                        data-reactid=".hbspt-forms-0.1:$1.1:$phone">
                        <legend class="hs-field-desc" style="display:none;"
                            data-reactid=".hbspt-forms-0.1:$1.1:$phone.1"></legend>
                        <div class="input" data-reactid=".hbspt-forms-0.1:$1.1:$phone.$phone"><input
                                id="phone-903a1608-65a1-4e38-9868-a892bb1db1cf" class="form-control" type="tel" name="phone"
                                value="" placeholder="Telefone" autocomplete="tel"
                                data-reactid=".hbspt-forms-0.1:$1.1:$phone.$phone.0"></div>
                    </div>
                </fieldset>
                <fieldset class="form-columns-1" data-reactid=".hbspt-forms-0.1:$2">
                    <div class="hs_tipo_de_contato hs-tipo_de_contato hs-fieldtype-select field hs-form-field"
                        data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato">
                        <legend class="hs-field-desc" style="display:none;"
                            data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.1"></legend>
                        <div class="input" data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato">
                            <select id="tipo_de_contato-903a1608-65a1-4e38-9868-a892bb1db1cf" class="form-control"
                                name="tipo_de_contato"
                                data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0">
                                <option value="" disabled="" selected=""
                                    data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0.0">Selecione
                                </option>
                                <option value="Orçamento"
                                    data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0.1:$Orçamento">
                                    Orçamento</option>
                                <option value="Dúvidas"
                                    data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0.1:$Dúvidas">
                                    Dúvidas</option>
                                <option value="Sugestões"
                                    data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0.1:$Sugestões">
                                    Sugestões</option>
                            </select></div>
                    </div>
                </fieldset>
                <fieldset class="form-columns-1" data-reactid=".hbspt-forms-0.1:$3">
                    <div class="hs_message hs-message hs-fieldtype-textarea field hs-form-field"
                        data-reactid=".hbspt-forms-0.1:$3.1:$message">
                        <legend class="hs-field-desc" style="display:none;"
                            data-reactid=".hbspt-forms-0.1:$3.1:$message.1"></legend>
                        <div class="" data-reactid=".hbspt-forms-0.1:$3.1:$message.$message">
                            <textarea
                                id="message-903a1608-65a1-4e38-9868-a892bb1db1cf" class="form-control" name="message"
                                placeholder="Mensagem" data-reactid=".hbspt-forms-0.1:$3.1:$message.$message.0"></textarea>
                        </div>
                    </div>
                </fieldset><noscript data-reactid=".hbspt-forms-0.2"></noscript>
                <div class="hs_submit hs-submit" data-reactid=".hbspt-forms-0.5">
                    <div class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.5.0"></div>
                    <div class="" data-reactid=".hbspt-forms-0.5.1"><input type="submit" value="Enviar"
                            class="primary-btn" data-reactid=".hbspt-forms-0.5.1.0"></div>
                </div>
                <div hidden class="hubspot-link__container sproket" data-reactid=".hbspt-forms-0.6"><img
                        src="https://js.hsforms.net/sproket.png" class="hubspot-link__icon"
                        data-reactid=".hbspt-forms-0.6.0"><span data-reactid=".hbspt-forms-0.6.1"><span
                            data-reactid=".hbspt-forms-0.6.1.0"></span><span
                            data-reactid=".hbspt-forms-0.6.1.1"> </span></span><a
                        href="https://app.hubspot.com/signup/marketing?hubs_medium=virality&amp;hubs_campaign=hubspot-forms-virality&amp;hubs_id=forms-branding-control&amp;hubs_source=share.hsforms.com&amp;intent=marketingFreeForms&amp;opt_sidebar=forms"
                        target="_blank" class="hubspot-link" data-reactid=".hbspt-forms-0.6.2"><span
                            class="hubspot-link-text" data-reactid=".hbspt-forms-0.6.2.0"></span></a></div><input name="hs_context" type="hidden"
                    value="{&quot;rumScriptExecuteTime&quot;:374.7950000106357,&quot;rumServiceResponseTime&quot;:554.1950000042561,&quot;rumFormRenderTime&quot;:3.3699999912641943,&quot;rumTotalRenderTime&quot;:559.5000000030268,&quot;rumTotalRequestTime&quot;:172.67500000889413,&quot;lang&quot;:&quot;ptBR&quot;,&quot;notifyHubSpotOwner&quot;:&quot;true&quot;,&quot;pageUrl&quot;:&quot;https://share.hsforms.com/1kDoWCGWhTjiYaKiSux2xzw3q3le&quot;,&quot;source&quot;:&quot;FormsNext-static-3.320&quot;,&quot;timestamp&quot;:1565382472154,&quot;userAgent&quot;:&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36&quot;,&quot;originalEmbedContext&quot;:{&quot;portalId&quot;:&quot;6256562&quot;,&quot;formId&quot;:&quot;903a1608-65a1-4e38-9868-a892bb1db1cf&quot;,&quot;target&quot;:&quot;#standalone-form&quot;,&quot;noShell&quot;:true,&quot;hutk&quot;:&quot;a79d0c8cca6753f86af04acf44247c42&quot;},&quot;formValidity&quot;:{&quot;email&quot;:{&quot;valid&quot;:false,&quot;errors&quot;:[&quot;Preencha esse campo obrigatório.&quot;],&quot;errorTypes&quot;:[&quot;REQUIRED_FIELD&quot;]}},&quot;formTarget&quot;:&quot;#standalone-form&quot;,&quot;correlationId&quot;:&quot;a9cd21a9-90f2-41c1-898b-430edbfc8de2&quot;,&quot;hutk&quot;:&quot;a79d0c8cca6753f86af04acf44247c42&quot;}"
                    data-reactid=".hbspt-forms-0.7">
                <iframe name="target_iframe_903a1608-65a1-4e38-9868-a892bb1db1cf" style="display:none;"
                    data-reactid=".hbspt-forms-0.8"></iframe>
            </form>
            <!--
            <form class="form-wrap" 
            novalidate="" accept-charset="UTF-8"
                action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/6256562/903a1608-65a1-4e38-9868-a892bb1db1cf"
                enctype="multipart/form-data" id="hsForm_903a1608-65a1-4e38-9868-a892bb1db1cf" method="POST"                
                data-form-id="903a1608-65a1-4e38-9868-a892bb1db1cf" data-portal-id="6256562"
                target="target_iframe_903a1608-65a1-4e38-9868-a892bb1db1cf" data-reactid=".hbspt-forms-0">
                <h4 class="text-white pb-20">Entre em contato</h4>                
                <input type="text" class="form-control" placeholder="Nome" required>
                <input type="phone" class="form-control" placeholder="Telefone" required>
                <input type="email" class="form-control" placeholder="Email" required>
                <select id="tipo_de_contato-903a1608-65a1-4e38-9868-a892bb1db1cf" class="form-control"
                                name="tipo_de_contato"
                                data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0">
                                <option value="" disabled="" selected=""
                                    data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0.0">Selecione
                                </option>
                                <option value="Orçamento"
                                    data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0.1:$Orçamento">
                                    Orçamento</option>
                                <option value="Dúvidas"
                                    data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0.1:$Dúvidas">
                                    Dúvidas</option>
                                <option value="Sugestões"
                                    data-reactid=".hbspt-forms-0.1:$2.1:$tipo_de_contato.$tipo_de_contato.0.1:$Sugestões">
                                    Sugestões</option>
                </select>
                <textarea name="message" id="" cols="30" rows="5" placeholder="Mensagem" class="form-control"></textarea>
                <button class="primary-btn">Enviar</button>
                
            </form>-->
        </div>
    </div>
</div>	
</section>
<!-- End home-about Area -->
    






@endsection
@section('script')
<script>
    $('.owl-carousel').owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,                
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
@endsection