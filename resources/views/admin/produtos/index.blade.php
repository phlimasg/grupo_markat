@extends('layouts.app')
@section('title', 'Produtos')

@section('content')
<div class="row">
    <div class="col-sm-3">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$count_prod}}</h3>
    
            <p>Produtos cadastrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          
        </div>
      </div>
      <div class="col-sm-3">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>
    
            <p>Produtos cadastrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          
        </div>
      </div>
      <div class="col-sm-3">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>
    
            <p>Produtos cadastrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          
        </div>
      </div>
      <div class="col-sm-3">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>
    
            <p>Produtos cadastrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          
        </div>
      </div>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Produtos cadastrados</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 350px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Procurar">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                <a href="{{ route('produtos.create') }}" class="btn btn-primary"> <i class="fa fa-plus"></i> Adicionar</a>
              </div>
            </div>
          </div>
        </div>             
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Medida</th>
              <th>Quantidade</th>
              <th>Valor</th>
              <th></th>
            </tr>
            @forelse ($produtos as $i)
            <tr>
              <td>{{$i->id}}</td>
              <td>{{$i->nome}}</td>
              <td>{{$i->uni_medida}}</td>
              <td>{{$i->quantidade}}</td>
              <td>{{$i->valor}}</td>
              <th><a href=""><i class="fa fa-eye"></i></a></th>
            </tr>                
            @empty
                Nenhum produto cadastrado
            @endforelse
            
          </tbody></table>
        </div>
        <div class="box-footer clearfix">
            {{ $produtos->links() }}
          </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@stop