@extends('layouts.app')
@section('title', 'Produtos')

@section('content')
<form action="{{ route('produtos.store') }}" method="post">
  @csrf
  <div class="box box-primary">
    <div class="box-header">Adicionar produto</div>
    <div class="box-body">
      <div class="row">
        <div class="col-sm-6">
          <label for="">Nome</label>
          <input type="text" name="nome" id="" class="form-control">
          @error('nome')
              <div class="text-danger">*{{ $message }}</div>
          @enderror
        </div>
        <div class="col-sm-2">
          <label for="">Uni.</label>
          <select name="uni_medida" id="" class="form-control">
            <option value=""></option>
            <option value="Metro">Metro</option>
            <option value="Litro">Litro</option>
            <option value="Quilo">Quilo</option>
          </select>
          @error('uni_medida')
              <div class="text-danger">*{{ $message }}</div>
          @enderror
        </div>
        <div class="col-sm-2">
          <label for="">Quantidade</label>
          <input type="text" name="quantidade" id="" class="form-control">
          @error('quantidade')
              <div class="text-danger">*{{ $message }}</div>
          @enderror
        </div>
        <div class="col-sm-2">
          <label for="">Valor</label>
          <input type="text" name="valor" id="" class="form-control">
          @error('valor')
              <div class="text-danger">*{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label for="">Informações do produto</label>
          <textarea name="descricao" id="editor" cols="30" rows="30"></textarea>
          @error('descricao')
              <div class="text-danger">*{{ $message }}</div>
          @enderror
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-save"></i> Salvar </button>
    </div>
  </div>

</form>
@stop
@section('js')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: "{{route('unisharp.lfm.show',['type'=>'Images'])}}",
    filebrowserImageUploadUrl: "{{route('unisharp.lfm.upload',['type'=>'Images','token'=>csrf_token()])}}",
    filebrowserBrowseUrl: "{{route('unisharp.lfm.show',['type'=>'Files'])}}",
    filebrowserUploadUrl: "{{route('unisharp.lfm.upload',['type'=>'Files','token'=>csrf_token()])}}"
  };
    CKEDITOR.replace('editor', options);
    $('#lfm').filemanager('image', {prefix: "{{route('unisharp.lfm.show',['type'=>'Images','token'=>csrf_token()])}}"});    
</script>
    
@endsection