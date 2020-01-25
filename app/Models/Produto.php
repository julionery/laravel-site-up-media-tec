<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'categoria_id',
        'nome',
        'descricao',
        'preco',
        'preco_custo',
        'preco_compra',
        'unidade_medida',
        'imagem',
        'ativo',
        'usuario_inclusao',
        'usuario_alteracao'
    ];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function rulesSearch()
    {
        return [
            'key-search'  => 'required',
        ];
    }

    public function search($data, $totalPage)
    {
        return $this->where('nome',  'LIKE', "%{$data['key-search']}%")
            ->paginate(100);
    }

    public function searchWithDescription($data, $totalPage)
    {
        return $this->where('nome',  'LIKE', "%{$data['key-search']}%")
            ->orWhere('descricao', 'LIKE', "%{$data['key-search']}%")
            ->paginate($totalPage);
    }

    public function rulesSearchCategory()
    {
        return [
            'categoria_id'  => 'required',
        ];
    }

    public function searchWithCategory($data, $totalPage)
    {
        return $this->where('categoria_id', $data['categoria_id'])
            ->paginate($totalPage);
    }

}
