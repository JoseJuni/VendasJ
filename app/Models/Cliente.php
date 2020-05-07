<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'nome',
        'endereco',
        'email',
        'telefone',
        'user',
        'password'
    ];

    public $timestamps = false;

}
