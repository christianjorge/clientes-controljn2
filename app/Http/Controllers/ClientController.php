<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\ModelClient;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

class ClientController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client=ModelClient::all();
        return json_encode($client);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $ret=ModelClient::create([
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'placa'=>$request->placa,
            'telefone'=>$request->telefone
        ]);

        if($ret){
            return $this->success(null,'Cliente '.$request->nome.' inserido com sucesso!');
        }else{
            return $this->error('Algum erro atrapalhou a inserção do cliente', 422, $ret);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelClient  $modelClient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client=ModelClient::find($id);
        return json_encode($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelClient  $modelClient
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        $ret = ModelClient::where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'cpf'=>$request->cpf,
            'placa'=>$request->placa
        ]);
        
        if($ret){
            return $this->success(null,'Cliente Nº '.$id.' alterado com sucesso!');
        }else{
            return $this->error('Algum erro atrapalhou a atualização do cliente', 422, $ret);
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelClient  $modelClient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelClient::destroy($id);
        return $this->success(null,'Cliente Nº '.$id.' excluído com sucesso!');
    }
}
