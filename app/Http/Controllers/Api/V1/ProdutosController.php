<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    /**
     * @var Produto
     */
    private $product;
    private $totalPage = 10;

    public function __construct(Produto $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->paginate($this->totalPage);
        return response()->json([
            'error' => false,
            'result' => $products
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->find($id);
        if(!$product)
            return response()->json([
                'error' => true,
                'message' => 'Produto não encontrado!'
            ], 500);

        return response()->json([
            'error' => false,
            'result' => $product
        ]);
    }

    public function search(Request $request)
    {
        $data = $request->all();
        $validate = validator($data, $this->product->rulesSearch());
        if($validate->fails())
        {
            $messages = $validate->messages();
            return response()->json([
                'error' => true,
                'validate.error' => $messages
            ], 422); //mensagens de erro
        }

        $products = $this->product->search($data, $this->totalPage);

        return response()->json([
            'error' => false,
            'result' => $products
        ]);
    }

    public function searchByCategory(Request $request)
    {
        $data = $request->all();
        $validate = validator($data, $this->product->rulesSearchCategory());
        if($validate->fails())
        {
            $messages = $validate->messages();
            return response()->json([
                'error' => true,
                'validate.error' => $messages
            ], 422); //mensagens de erro
        }

        $products = $this->product->searchWithCategory($data, $this->totalPage);

        return response()->json([
            'error' => false,
            'result' => $products
        ]);
    }
}
