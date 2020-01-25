<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Configuracao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfiguracoesController extends Controller
{
    /**
     * @var Configuracao
     */
    private $configuracao;

    public function __construct(Configuracao $configuracao)
    {
        $this->configuracao = $configuracao;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configuracao = $this->configuracao->find($id);
        if(!$configuracao)
            return response()->json([
                'error' => false,
                'message' => 'Falha ao buscar a configuração!'
            ], 500);

        return response()->json([
            'error' => false,
            'result' => $configuracao
        ]);
    }

}
