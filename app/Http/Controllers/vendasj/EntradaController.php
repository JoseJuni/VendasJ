<?php

namespace App\Http\Controllers\vendasj;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
   private $entrada;

   public function __construct(Entrada $entrada)
   {
       $this->entrada = $entrada;
   }



    public function index()
    {
       $entradas = $this->entrada->all();
        return view('entrada', compact('entradas'));
    }
}
