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
                        <a href="#" class="primary-btn orcamento-btn text-uppercase btn-block btn-lg text-center" data-toggle="modal" data-target="#produto_{{$produto->id}}"><span class="lnr lnr-cart"></span> Adicionar ao orçamento</a>
                            <div id="produto_{{$produto->id}}" class="modal fade" role="dialog">
                                <form action="{{ route('carrinhoStore') }}" method="post">
                                    <div class="modal-dialog modal-lg">
                                        @csrf
                                    <input type="hidden" name="user_id" value="{{Cookie::get('user_id')}}">
                                    @if (Cookie::get('orcamento_id'))
                                    <input type="hidden" name="orcamento_id" value="{{Cookie::get('orcamento_id')}}">
                                    @endif
                                    <input type="hidden" name="email" value="{{Cookie::get('email')}}">
                                    <input type="hidden" name="produto_id" value="{{$produto->id}}">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header" style="display: inline">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title text-left">Adicionar ao carrinho</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="{{url('/public/storage').'/'.$produto->imagem->pluck('url')->first()}}" alt="" style="width: 100%">
                                            </div>
                                            <div class="col-sm-6 text-left">
                                                <h4>{{$produto->nome}}</h4>
                                                <p>Este produto é vendido em: <b>{{$produto->uni_medida}}</b></p>
                                                <label for="">Quantidade:</label> 
                                                <input type="text" name="qtd" value="1" id="" class="form-control" placeholder="apenas números">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="primary-btn orcamento-btn text-uppercase">Adicionar</button>
                                        </div>
                                      </div>
                                  
                                    </div>
                                </form>
                              </div>
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
@section('script')
<script>
    $('.owl-carousel').owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:false,
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