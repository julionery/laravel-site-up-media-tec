<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @var User
     */
    private $user;
    private $totalPage = 5;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->paginate($this->totalPage);
        return response()->json([
            'error' => false,
            'result' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validate = validator($data, $this->user->rules());
        if($validate->fails())
        {
            $messages = $validate->messages();
            return response()->json([
                'error' => true,
                'validate.error' => $messages
            ], 422);
        }

        if(!$insert = $this->user->create($request->all()))
            return  response()->json([
                'error' => true,
                'message' => 'Erro ao inserir!'
            ], 500);

        return response()->json([
            'error' => false,
            'result' => $insert
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);
        if(!$user)
            return response()->json([
                'error' => true,
                'message' => 'Usuário não encontrado!'
            ], 500);

        return response()->json([
            'error' => false,
            'result' => $user
        ]);
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
        $data = $request->all();

        $validate = validator($data, $this->user->rules($id));
        if($validate->fails())
        {
            $messages = $validate->messages();
            return response()->json([
                'error' => true,
                'validate.error' => $messages
            ], 422); //mensagens de erro
        }

        if(!$user = $this->user->find($id))
            return response()->json([
                'error' => true,
                'message' => 'Usuário não encontrado!'
            ], 404);

        if(!$update = $user->update($data))
            return response()->json([
                'error' => true,
                'message' => 'Usuário não atualizado!'
            ], 500);

        return response()->json([
            'error' => false,
            'result' => $update
        ]);
    }

}
