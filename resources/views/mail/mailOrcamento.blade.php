<div style="width: 100%; margin: 0 auto; max-width: 600px; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.1em">
    <div style="text-align: center; box-shadow: 0px 10px 10px grey;">
        <img src="http://telhasimperio.grupomarkat.com/public/img/imperio/logo_.png" alt="" style="margin-top: 15px; margin-bottom: 15px; ">
    </div>
    <hr>
    <h3>Olá {{$orcamento->user->nome}},</h3> <br>
    <p>Com muita felicidade recebemos o seu orçamento e responderemos o mais breve possível.</p>
    <p>Qualquer dúvida, entre em contato conosco pelo whatsapp clicando no botão abaixo.</p>
    <div style="text-align: center">
        <a href="http://wa.me/552195846784">
        <img src="https://3.bp.blogspot.com/-T05PTLsSZMA/Wp27wFI50GI/AAAAAAAAARM/VmEM4CmZ1nMdVVM64-Zwb7KEEa00SG-TwCLcBGAs/s1600/marido-de-aluguel-whatsapp-1024x412.png" alt="Atendimento via WhatsApp"
        width="60%"></a>

    </div>
    <p>Abaixo, uma cópia do que foi solicitado:</p>
    <div style="width: 100%">          
        <table >
          <thead>
            <tr>                  
              <th></th>
              <th>Produto</th>
              <th>Quantidade</th>              
            </tr>
          </thead>
          <tbody>
            @forelse ($orcamento->itens as $i)
            <tr>                
                <td><img src="{{url('/public/storage').'/'.$i->produto->imagem->pluck('url')->first()}}" alt="{{$i->produto->nome}}" style="width: 100%; max-width: 150px;"></td>
                <td><h3>{{$i->produto->nome}}</h3></td>
                <td>{{$i->quantidade}}</td>
            </tr>                        
                @empty
                    Orçamento vazio....
                @endforelse   
          </tbody>
        </table>
    </div>
    <div style="float: right;">
        <p>Atenciosamente,</p>        
        <p><b>Equipe Telhas Império.</b></p>
    </div>

</div>