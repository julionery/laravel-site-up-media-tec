<?php

namespace App\Http\Controllers\Admin;

use App\Models\Equipe;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class EquipeController extends Controller
{

    public function index()
    {
        $registros = Equipe::all();
        return view('admin.equipe.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.equipe.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Equipe();

        $registro->titulo = $dados['titulo'];
        $registro->data = $dados['data'];
        $registro->texto = $dados['texto'];
        $registro->publicar = $dados['publicar'];

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.equipe');
    }

    public function editar($id)
    {
        $registro = Equipe::find($id);

        return view('admin.equipe.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Equipe::find($id);

        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->data = $dados['data'];
        $registro->texto = $dados['texto'];
        $registro->publicar = $dados['publicar'];

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.equipe');
    }

    public function deletar($id)
    {
        Equipe::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.equipe');
    }
}
