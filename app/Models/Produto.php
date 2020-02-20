<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table ='Produto';

    public $timestamsps= false;

    protected $fillable = [
        'id',
        'nome',
        'id_categoria',
        'descricao',
        'preco',
        'quantidade',
        'preco',
        'data_validade'
    ];

    public $regras = [
        'nome' => 'required|min:5|max:100',
        'id_categoria' => 'required|numeric' ,
        'descricao' => 'required',
        'preco' => 'required|numeric',
        'quantidade'=> 'required|numeric',
        'data_validade' => 'required'
    ];

    //
}
