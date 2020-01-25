<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'ativo',
        'usuario_inclusao',
        'usuario_alteracao'
    ];

    public function produto(){
        return $this->hasMany(Produto::class);
    }

    public function rulesSearch()
    {
        return [
            'key-search'  => 'required',
        ];
    }

    public function search($data, $totalPage)
    {
        return $this->where('nome', $data['key-search'])
            ->orWhere('descricao', 'LIKE', "%{$data['key-search']}%")
            ->paginate($totalPage);
    }
}
