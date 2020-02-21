@extends('layouts.app')
@section('title', 'Produtos')
@section('content')
<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Imagens do produto</h3>
    <div class="box-tools">
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
        <i class="fa fa-plus"></i> Adicionar
      </a>      
    </div>
  </div>
</div>
<div class="row">
  @forelse ($imagens as $i)
      <div class="col-sm-2 text-center">
        <div class="panel">
          <div class="panel-body">
            <img src="{{asset("storage/")."/".$i->url}}" alt="" srcset="" class="img-responsive">
            <a href="#" data-toggle="modal" data-target="#modal-{{$i->id}}"><i class="fa fa-trash"></i></a>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-{{$i->id}}" style="display: none;">
        <div class="modal-dialog">
          <form action="{{ route('produto_imagens.destroy',['id'=>$i->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <input type="hidden" name="produtos_id" value="1">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Excluir foto</h4>
              </div>
              <div class="modal-body">
                Confirma a exclusão da imagem?
              </div>
              <div class="modal-footer">          
                <button type="submit" class="btn btn-primary">Confirmar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </form>
        </div>
        <!-- /.modal-dialog -->
      </div>
  @empty
      Nenhuma imagem
  @endforelse    
</div>
<div class="modal fade" id="modal-default" style="display: none;">
  <div class="modal-dialog">
    <form action="{{ route('produto_imagens.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="produtos_id" value="1">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Enviar fotos</h4>
        </div>
        <div class="modal-body">
          <input type="file" name="url[]" class="form-control" multiple accept="image/png, image/jpeg">
        </div>
        <div class="modal-footer">          
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </form>
  </div>
  <!-- /.modal-dialog -->
</div>
@stop