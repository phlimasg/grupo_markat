@extends('layouts.app_imperio')
@section('content')

<!-- Start service Area -->
<section class="service-area section-gap" id="products">
    <div class="container">
        
        <div class="row">            
                @if (!empty($produto->imagem))
                    <div class="col-md-4 text-center" style="background-color: rgb(245, 245, 245); padding: 5px; border: 2px solid white">                        
                        <div id="{{$produto->id}}" class="owl-carousel owl-theme">
                            <!-- Wrapper for slides -->
                            @foreach ($produto->imagem as $imagem)
                                <div class="item">
                                    <a href="{{url('/public/storage').'/'.$imagem->url}}" class="img-gal">
                                        <img src="{{url('/public/storage').'/'.$imagem->url}}" alt="">
                                    </a>                                    
                                </div>  
                            @endforeach
                        </div>
                    </div>
                @else  
                Nenhuma imagem para exibir 
                @endif   
                <div class="col-md-8">
                    <h1>{{$produto->nome}}</h1>
                    <p>Vendido por: {{$produto->uni_medida}}</p>
                    @if (Cookie::get('email'))
                        <button type="submit" class="primary-btn orcamento-btn text-uppercase btn-block btn-lg"> <span class="lnr lnr-cart"></span> Adicionar ao orçamento</button>
                    @else
                        <a href="{{ route('cadastro') }}" class="orcamento-btn primary-btn text-uppercase btn-block btn-lg"><span class="lnr lnr-cart"></span> Adicionar ao orçamento</a>                            
                    @endif
                </div>                
        </div>        
    </div>
</section>
<section class="home-about-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">  
                <div class="row justify-content-center">
                    <div class="col-md-12 pb-30 header-text text-center">
                        <h1 class="mb-10">Descrição do Produto</h1>                        
                    </div>
                </div>               
                {!!$produto->descricao!!}
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById("header").classList.add("header-scrolled");
</script>
@endsection