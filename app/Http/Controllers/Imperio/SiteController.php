<?php

namespace App\Http\Controllers\Imperio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CadastroSiteRequest;
use App\Mail\OrcamentoMail;
use App\Model\imperio\CadastroSite;
use App\Model\imperio\iten;
use App\Model\imperio\orcamento;
use App\Model\imperio\produtos;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        $produtos =  produtos::limit(6)->get();
        
        return view('imperio.index', compact('produtos'));
    }
    public function produtos()
    {
        $produtos =  produtos::paginate(30);
        
        return view('imperio.produtos', compact('produtos'));
    }
    public function cadastro()
    {   
        return view('imperio.cadastro');
    }
    public function store(CadastroSiteRequest $request)
    {   
        $cadastro = CadastroSite::where('email',$request->email)->first();
        empty($cadastro) 
        ? $cadastro = CadastroSite::create($request->except(['_token'])) 
        : CadastroSite::where('email',$request->email)->update($request->except(['_token','email']));       
        return redirect()->route('produtos')
        ->cookie('email',$request->email, 3600)
        ->cookie('nome',$request->nome,3600)
        ->cookie('user_id',$cadastro->id)
        ->cookie('modal',1,3600);
    }
    public function show($id)
    {
        $produto = produtos::findOrFail($id);
        return view('imperio.showProduto',compact('produto'));
    }
    public function carrinhoStore(Request $request)
    {        
        $orcamento_id = $request->orcamento_id;
        if(empty($request->orcamento_id)){
            $orcamento = orcamento::create([
                'cadastro_sites_id'=> $request->user_id,
                'email_enviado'	=> '0',
                'email_data_hora'=> '0001-01-01 00:00:00'
            ]);
            $orcamento_id = $orcamento->id;
            $itens = iten::create([
                'produtos_id' => $request->produto_id,	
                'orcamentos_id' => $orcamento_id,
                'quantidade'  => $request->qtd
            ]);
            return redirect()->back()
            ->cookie('orcamento_id',$orcamento_id, 3600);
        }else{
            $itens = iten::create([
                'produtos_id' => $request->produto_id,	
                'orcamentos_id' => $orcamento_id,
                'quantidade'  => $request->qtd
            ]);
            return redirect()->back();
        }     
        
    }
    public function carrinho($id)
    {
        $orcamento = orcamento::where('cadastro_sites_id',Cookie::get('user_id'))->where('id',$id)->first();
        return view('imperio.carrinho',compact('orcamento'));

    }
    public function carrinhoUpdate(Request $request)
    {
        iten::where('id',$request->item_id)->update([
            'quantidade' => $request->quantidade
        ]);
        return redirect()->back();
    }
    public function carrinhoDelete(Request $request)
    {
        iten::where('id',$request->item_id)->delete();
        return redirect()->back();
    }
    public function carrinhoFinalizar(Request $request)
    {
        try {
            $orcamento = orcamento::find($request->orcamento_id);        
        Mail::to($orcamento->user->email)
        ->bcc('contatos@telhasimperio.com')        
        //->bcc('vendas@telhasimperio.com')
        ->send(new OrcamentoMail($orcamento));
        $orcamento->update([
            'email_enviado' => 1,
            'email_data_hora' => date('Y-m-d H:i:s'),
        ]);
        
        return redirect()->route('carrinhoFinal')->cookie('orcamento_id','', time() - 3600);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }
}
