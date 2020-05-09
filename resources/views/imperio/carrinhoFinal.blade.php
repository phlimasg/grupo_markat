@extends('layouts.app_imperio')
@section('content')

<section class="home-about-area section-gap" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text">            
                <h1 class="mb-10">Prontinho, recebemos seu orçamento!</h1>
                <h4>Enviamos para o email {{Cookie::get('email')}} uma cópia. Aguarde que retornaremos o mais rápido possível.</h4>                
            </div>
        </div>
    </div>
</section>
@endsection

