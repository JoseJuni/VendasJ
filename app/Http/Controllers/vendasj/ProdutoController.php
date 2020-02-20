<?php

namespace App\Http\Controllers\vendasj;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $produto;

    public function __construct(Produto $prod)
    {
        $this->produto = $prod;
    }

    public function index(Produto $prod)
    {
        //
        $produtos = $prod->all();

        return view('Produto', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = null;

        $categoria = Categoria::all();
        return view('produto.cadastro', compact('categoria'));
    }

    public function search(Request $request)
    {
   //     $produto = $this->produto;
        $dados = $request->except('_token');

        if($dados['params'] == 'id'){
            $produtos = Produto::where('id', '=', $dados['field'])->paginate(6);

            return view('Produto', compact('produtos'));
        }
        else{

           $produtos = Produto::where('nome', 'LIKE', $dados['field'] . '%')->paginate(6);

           return view('Produto', compact('produtos'));

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');



        /*$isvalid = $this->validate($dados, $this->produto->regras);

        if($isvalid){
            return view('produto.cadastro');
        }else{
            return view('produto.cadastro');
        }*/


        $isinserted = $this->produto->create($dados);

        if($isinserted){
           return redirect(route('admin.produto'));
        }else{
           return redirect(route('produto.create'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*  $produtos = $this->produto->find($id);
        return view('produto.cadastro', compact('produtos');*/

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = $this->produto->find($id);
        return view('produto.editar', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
