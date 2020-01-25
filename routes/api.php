<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$this->group(['prefix' => 'v1'], function () {

    $this->resource('configuracoes', 'Api\V1\ConfiguracoesController', ['only' => 'show']);

    $this->post('auth', 'Auth\AuthApiController@authenticate');
    $this->post('auth-refresh', 'Auth\AuthApiController@refreshToken');

    //$this->group(['middleware' => 'jwt.auth'], function (){
            $this->get('produtos/search', 'Api\V1\ProdutosController@search');
            $this->get('produtos/category', 'Api\V1\ProdutosController@searchByCategory');
            $this->resource('produtos', 'Api\V1\ProdutosController', ['except' => ['create', 'edit', 'store', 'update', 'destroy']]);

            $this->get('categoria/search', 'Api\V1\CategoriaController@search');
            $this->resource('categoria', 'Api\V1\CategoriaController', ['except' => ['create', 'edit', 'store', 'update', 'destroy']]);

            $this->resource('usuarios', 'Api\V1\UserController', ['except' => ['create', 'edit', 'destroy']]);
    //});
});