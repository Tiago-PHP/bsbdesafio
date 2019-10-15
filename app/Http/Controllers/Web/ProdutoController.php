<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Produto;
use App\Http\Controllers\Controller;


class ProdutoController extends Controller
{
    public function index()
        //criar os metodos show,store,update,delete
    {
        $products =  Produto::all();

        return   view('produtos.index',compact('products'));
    }

    public function show($id)
    {
        $products =   Produto::findOrFail($id);
        return response()->json($products);
    }

    public function store(Request $request)
    {

        try {

            $produto= $request->all();
            
            Produto::create($produto);
            return redirect(route('produtos'))->with('mensagem_sucesso', 'Produto adicionado com sucesso!');
       

        }catch (\Exception $ex) {

            return redirect(route('produtos'))->withErrors($ex->getMessage())->withInput();

        }

    }
        public function  update(Request $request, $id)
        {
            try{
                $productcom= $request->all();
                $produto = $this->produto->find($id);
                $produto->update($productcom);

                return response()->json(['msg'=>' Pedido Atualizado com sucesso!'], 201);

            } catch (\Exception $e){

                if(config('app.debug')){
                    return response()->json(ApiError::errorMessage($e->getMessage(), 1011));

                }

                return response()->json(ApiError::errorMessage('Houve um erro ao Atualizar', 1011));

            }

        }

        public function delete(findOrFail $id)
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
    public function create(){
        return view('produtos.create');
    }

};
