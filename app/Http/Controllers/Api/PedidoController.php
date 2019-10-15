<?php

namespace App\Http\Controllers\Api;

use App\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{
    /**
     * @var Pedido
     */
    private $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function index()
    {
        $compras = ['compras' => $this->pedido->all()];
       return response()->json($compras);

    }


    public function show(Pedido $id)
    {
        $compras = ['compras' => $id];
        return response()->json($compras);
    }

    public function store(Request $request){
    try{
        $pedidoCompras = $request->all();
        $this->pedido->create($pedidoCompras);


            return response()->json(['msg'=>'Pedido Realizado com Sucesso'], 201);

        } catch (\Exception $e){

    if(config('app.debug')){
        return response()->json(ApiError::errorMessage($e->getMessage(), 1010));

    }

    return response()->json(ApiError::errorMessage('Houve um erro ao Realizar o Pedido', 1010));

}

    }

    public function  update(Request $request, $id)
{
    try{
        $pedidoCompras= $request->all();
        $pedido = $this->pedido->find($id);
        $pedido->update($pedidoCompras);

        return response()->json(['msg'=>' Pedido Atualizado com sucesso!'], 201);

    } catch (\Exception $e){

        if(config('app.debug')){
            return response()->json(ApiError::errorMessage($e->getMessage(), 1011));

        }

        return response()->json(ApiError::errorMessage('Houve um erro ao Atualizar', 1011));

    }

}

    public function delete(Projeto $id)
{
    try
    {
        $id->delete();

        return response()->json(['compras' => ['msg' => 'pedido: ' . $id . ' Removido Com Sucesso']], 200);

    } catch (\Exception $e){
        if(config('app.debug')){
            return response()->json(ApiError::errorMessage($e->getMessage(), 1012));
        }
        return response()->json(ApiError::errorMessage('Houve um erro ao deletar', 1012));

    }

}

}

