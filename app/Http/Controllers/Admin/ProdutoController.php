<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categoria;
use Illuminate\Http\Request;

use App\Models\Produto;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index()
    {
        $registros = Produto::all();

        return view('admin.produtos.index', compact('registros'));
    }

    public function adicionar()
    {
        $categorias = Categoria::orderBy('nome', 'desc')->get();
        return view('admin.produtos.adicionar', compact('categorias'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Produto();

        $registro->nome = $dados['nome'];
        $registro->descricao = $dados['descricao'];
        $registro->categoria_id = $dados['categoria_id'];
        $registro->preco = $dados['preco'];
        $registro->preco_custo = $dados['preco_custo'];
        $registro->preco_compra = $dados['preco_compra'];
        //$registro->unidade_medida = $dados['unidade_medida'];
        $registro->ativo = $dados['ativo'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/produtos";
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
        return redirect()->route('admin.produtos');
    }

    public function editar($id)
    {
        $registro = Produto::find($id);
        $categorias = Categoria::orderBy('nome', 'desc')->get();
        return view('admin.produtos.editar', compact('registro', 'categorias'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Produto::find($id);

        $dados = $request->all();

        $registro->nome = $dados['nome'];
        $registro->descricao = $dados['descricao'];
        $registro->categoria_id = $dados['categoria_id'];
        $registro->preco = $dados['preco'];
        $registro->preco_custo = $dados['preco_custo'];
        $registro->preco_compra = $dados['preco_compra'];
        //$registro->unidade_medida = $dados['unidade_medida'];
        $registro->ativo = $dados['ativo'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/produtos";
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
        return redirect()->route('admin.produtos');
    }

    public function deletar($id)
    {
        Produto::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.produtos');
    }
}
