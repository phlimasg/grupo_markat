@extends('layouts.app_imperio')
@section('content')

<section class="home-about-area section-gap" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text">            
                <h1 class="mb-10">Esse são os itens do seu orçamento:</h1>                
            </div>
        </div>  
        
        <div class="table-responsive">          
            <table class="table table-hover">
              <thead>
                <tr>                  
                  <th></th>
                  <th>Produto</th>
                  <th>Quantidade</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($orcamento->itens as $i)
                <tr>
                    <td>
                        <td><img src="{{url('/public/storage').'/'.$i->produto->imagem->pluck('url')->first()}}" alt="{{$i->produto->nome}}" style="width: 100%; max-width: 250px;"></td>
                        <td><h3>{{$i->produto->nome}}</h3></td>
                        <form action="{{ route('carrinhoUpdate') }}" method="post">
                        <td><input type="text" name="quantidade" id="" value="{{$i->quantidade}}" class="form-control"></td>
                            @csrf
                            <input type="hidden" name="item_id" value="{{$i->id}}">
                        <td>
                            <button type="submit" class="btn primary-btn"><h3><span class="lnr lnr-sync"></span></h3></button>
                        </td>
                        </form>     
                        <form action="{{ route('carrinhoDelete') }}" method="post">
                            @csrf
                            <input type="hidden" name="item_id" value="{{$i->id}}">
                            <td><button type="submit" class=" btn primary-btn" style="background-color: brown"><h3><span class="lnr lnr-trash"></span></h3></button></td>                       
                        </form>                   
                    </tr>                        
                    @empty
                        Orçamento vazio....
                    @endforelse   
              </tbody>
            </table>
        </div>
        <form action="{{ route('carrinhoFinalizar', ['id'=>1]) }}" method="POST">
            @csrf
        <input type="hidden" name="orcamento_id" value="{{Cookie::get('orcamento_id')}}">
            <div class="row">
                <div class="offset-9 col-sm-3 ">
                    <button href="" class="btn primary-btn btn-block orcamento-btn text-upper" style="">FINALIZAR ORÇAMENTO</button>
                </div>
            </div>
        </form>

        
    </div>
</section>
@endsection

