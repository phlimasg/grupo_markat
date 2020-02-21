<?php

namespace App\Http\Controllers\Imperio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoImgRequest;
use App\Model\imperio\produtos_img;
use Illuminate\Support\Facades\Storage;

class ImagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoImgRequest $request)
    {     
        
        foreach ($request->url as $photo) {            
            $filename = Storage::putFile('public/produtos/'.$request->produtos_id, $photo);
            produtos_img::create([
                'produtos_id' => $request->produtos_id,
                'url' => str_replace('public/','',$filename) 
                ]);
            }
            return redirect()->back();
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagens = produtos_img::where('produtos_id',$id)->get();        
        return view('admin.produtos.imagens.show', compact('imagens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto_img = produtos_img::where('id',$id)->first();
        if(Storage::delete('public/'.$produto_img->url) == true){
            $produto_img->delete();
        }
        return redirect()->back();
        
    }
}
