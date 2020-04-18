@extends('layouts.app_imperio')
@section('content')

<section class="home-about-area section-gap" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text">            
                <h1 class="mb-10">Oi, precisamos conhecer um pouco mais você!</h1>
                <h4>São só algumas informações. É bem rapidinho...</h4>                
            </div>
        </div>
        <form action="{{ route('cadastro.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-sm-6">
                <h5 for="">Qual seu nome?</h5>
                <input type="text" name="nome" id="" class="form-control-cadastro">
            </div>
            <div class="col-sm-4">
                <h5 for="">Qual seu email?</h5>
                <input type="email" name="email" id="" class="form-control-cadastro" required>                
                *nós enviaremos o orçamento para esse e-mail
            </div>
            <div class="col-sm-2">
                <h5 for="">Qual seu telefone?</h5>
                <input type="text" name="telefone" id="" class="form-control-cadastro" data-mask="(00)#0000-0000">                
                *não obrigatório
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <h5 for="">Qual seu cep?</h5>
                <input type="text" name="cep" id="cep" class="form-control-cadastro" data-mask="00000-000" required>
                *precisamos pra calcular seu frete
            </div>
            <div class="col-sm-4">
                <h5 for="">Qual sua rua?</h5>
                <input type="text" name="rua" id="rua" class="form-control-cadastro" >                                
            </div>
            <div class="col-sm-1">
                <h5 for="">Nº</h5>
                <input type="text" name="numero" id="" class="form-control-cadastro" >                 
            </div>
            <div class="col-sm-2">
                <h5 for="">Qual seu Bairro?</h5>
                <input type="text" name="bairro" id="bairro" class="form-control-cadastro" >                 
            </div>
            <div class="col-sm-2">
                <h5 for="">Qual sua cidade?</h5>
                <input type="text" name="cidade" id="cidade" class="form-control-cadastro" >                 
            </div>
            <div class="col-sm-1">
                <h5 for="">UF</h5>
                <input type="text" name="uf" id="uf" class="form-control-cadastro" >                 
            </div>
        </div>
        <button type="submit" class="orcamento-btn primary-btn text-uppercase btn-lg btn-block">Pronto! Preenchí tudo e quero fazer o orçamento agora.</button>
        </form>
    </div>
</section>




<!-- Adicionando Javascript -->
<script src="https://viacep.com.br" crossorigin="anonymous" SameSite="none Secure"></script>
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
@endsection

