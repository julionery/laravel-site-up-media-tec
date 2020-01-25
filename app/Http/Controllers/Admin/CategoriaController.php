<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CategoriaController extends Controller
{
    public function index()
    {
        $registros = Categoria::all();
        return view('admin.categorias.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.categorias.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Categoria();

        $registro->nome = $dados['nome'];
        $registro->descricao = $dados['descricao'];
        $registro->ativo = $dados['ativo'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/categorias";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            //$nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            //Image::make($nomeOldImagem)->resize(180, 180)->save($nomeNewImagem);

            $registro->imagem = $nomeOldImagem;
        }

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.categorias');
    }

    public function editar($id)
    {
        $registro = Categoria::find($id);
        return view('admin.categorias.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Categoria::find($id);

        $dados = $request->all();

        $registro->nome = $dados['nome'];
        $registro->descricao = $dados['descricao'];
        $registro->ativo = $dados['ativo'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/categorias";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            //$nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            //Image::make($nomeOldImagem)->resize(180, 180)->save($nomeNewImagem);

            $registro->imagem = $nomeOldImagem;
        }

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.categorias');
    }

    public function deletar($id)
    {
        Categoria::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.categorias');
    }
}
