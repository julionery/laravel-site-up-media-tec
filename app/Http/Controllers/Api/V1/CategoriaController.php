<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    /**
     * @var Categoria
     */
    private $categoria;
    private $totalPage = 10;

    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = $this->categoria->paginate($this->totalPage);
        return response()->json([
            'error' => false,
            'result' => $categorias
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
        $categoria = $this->categoria->find($id);
        if(!$categoria)
            return response()->json([
                'error' => true,
                'message' => 'Produto não encontrado!'
            ], 500);

        return response()->json([
            'error' => false,
            'result' => $categoria
        ]);
    }

    public function search(Request $request)
    {
        $data = $request->all();
        $validate = validator($data, $this->categoria->rulesSearch());
        if($validate->fails())
        {
            $messages = $validate->messages();
            return response()->json([
                'error' => true,
                'validate.error' => $messages
            ], 422); //mensagens de erro
        }

        $categorias = $this->categoria->search($data, $this->totalPage);

        return response()->json([
            'error' => false,
            'result' => $categorias
        ]);
    }

}
