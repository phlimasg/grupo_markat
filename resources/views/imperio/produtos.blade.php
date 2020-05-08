@extends('layouts.app_imperio')
@section('content')
<!-- Modal -->
<div id="cadastrado" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: unset">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Dados recebidos!</h4>
        </div>
        <div class="modal-body">
        <h4>Oi {{Cookie::get('nome')}},
        <br><br>
        Recebemos seus dados com sucesso!
        <br>
        Agorá é só adicionar os itens ao seu orçamento. Após finalizado, enviaremos para o email <b>{{Cookie::get('email')}}</b> o valor total do orçamento.</h4>         
        <p></p>
        </div>
        <div class="modal-footer">
          <a href="#products" class="primary-btn orcamento-btn text-uppercase" onclick="modalClose()">Fazer meu orçamento agora</a>
        </div>
      </div>
  
    </div>
  </div>
  <!-- fim modal -->
<section class="home-about-area section-gap" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 pb-30 header-text">            
                <h1 class="mb-10">O melhores preços você encontra aqui!</h1>
                @if(Cookie::get('email')) 
                <h4>Você já pode adicionar produtos ao seu orçamento...</h4>                
                @endif
            </div>
            <div class="col-md-3">
                <a href="{{ route('carrinho', ['id'=>Cookie::get('orcamento_id')]) }}" class="orcamento-btn primary-btn text-uppercase btn-block" style="font-size: 1 em"><span class="lnr lnr-cart"></span> Finalizar orçamento 
                    <span class="badge">
                        {{\App\Model\imperio\iten::where('orcamentos_id',Cookie::get('orcamento_id'))
                        ->count()}}
                    </span></a>
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
                            <a href="#" class="orcamento-btn primary-btn text-uppercase btn-block" data-toggle="modal" data-target="#produto_{{$produto->id}}"><span class="lnr lnr-cart"></span> Adicionar</a>
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
        {{ $produtos->links() }}
    </div>
</section>



@if(Cookie::get('modal')==1)    
    <script>
        function modalClose() {
            $("#cadastrado").modal("hide");
        }
        $("#cadastrado").modal();        
    </script>
    @php(setcookie('modal',0,360))    
@endif
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

