<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
   protected $table = "entrada";

   public $timestamps = false;

   public $fillabe = [
    'id',
    'id_user',
    'id_produto',
    'quantidade',
    'data_validae'

   ];
}
