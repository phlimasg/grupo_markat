<?php

namespace App\Http\Controllers\Imperio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CadastroSiteRequest;
use App\Model\imperio\produtos;
use GuzzleHttp\Client;

class SiteController extends Controller
{
    public function index()
    {
        $produtos =  produtos::paginate(20);
        
        return view('imperio.index', compact('produtos'));
    }
    public function cadastro()
    {   
        return view('imperio.cadastro');
    }
    public function store(CadastroSiteRequest $request)
    {   
        $client = new Client();
        $response = $client->get('https://geocode.search.hereapi.com/v1/geocode?q=Invalidenstr+117%2C+Berlin&apiKey=Y3eeJPPKY4bz8RFWmDJdg5fS1jxwC0fyQN3rGHFSDuU');
        dd(json_decode($response->getBody()->getContents()));
        return redirect('/')->cookie('email',$request->email, 360);
    }
}
