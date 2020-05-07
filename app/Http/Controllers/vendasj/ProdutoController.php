<?php

namespace App\Http\Controllers\vendasj;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;

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
        //$this->middleware('auth');
    }

    public function index(Produto $prod)
    {
        //
        $produtos = $prod->Paginate(5);

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

        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:6|max:255',
            'preco' => 'required|min:3',
        ]);

        if($validator->fails()){

            return redirect(route('produto.create'))
            ->withErrors($validator)
            ->withInput();;

        }else{

            $isinserted= $this->produto->create($dados);

            if($isinserted){
            return redirect(route('admin.produto'));
            }else{
            return redirect(route('produto.create'));
            }
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
        $categoria = Categoria::all();

        return view('produto.editar', compact('produtos', 'categoria'));
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
        $dados = $request->except('_token');



        /*$isvalid = $this->validate($dados, $this->produto->regras);

        if($isvalid){
            return view('produto.cadastro');
        }else{
            return view('produto.cadastro');
        }*/

        $produto = $this->produto->find($id);
        $isUpdated = $produto->update($dados);

        if($isUpdated){
           return redirect(route('admin.produto'));
        }else{
           return redirect(route('admin.produto'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        $isdeleted = $produto->delete($id);

        if($isdeleted){
           return redirect(route('admin.produto'));
        }else{
           return redirect(route('admin.produto'));
        }
    }

    public function create_cat(Request $request){

        $dados = $request->all();

        $isinserted= Categoria::create($dados);

        if($isinserted){
           return redirect(route('produto.create'));
        }else{
           return redirect(route('produto.create'));
        }
    }
}
