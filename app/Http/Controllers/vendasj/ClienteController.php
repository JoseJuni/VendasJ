<?php

namespace App\Http\Controllers\vendasj;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $cliente;
    private $validate;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
        //$this->validate= $val;
    }

    public function index()
    {
        $clientes = $this->cliente->all();

        return view('cliente', compact('clientes'));
    }

    public function search(Request $request)
    {
        $dados = $request->except('_token');

        if($dados['params'] == 'id'){
            $clientes = $this->cliente->where('id', '=', $dados['field'])->paginate(6);

            return view('cliente', compact('clientes'));
        }
        else{

           $clientes = $this->cliente->where('nome', 'LIKE', $dados['field'] . '%')->paginate(6);

           return view('cliente', compact('clientes'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Cliente.cadastro');
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


        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:6|max:50',
            'endereco' => 'required|min:10|max:255',
            'email' => 'required|min:10|max:50',
            'telefone' => 'required|min:9|max:15',
            'user' =>'required|min:5|max:50',
            'password' => 'required|min:6|max:200'
        ]);

        if($validator->fails()){

            return redirect(route('cliente.create'))
            ->withErrors($validator)
            ->withInput();

        }else{
            $dados['password'] = bcrypt($dados['password']);

            $this->cliente->create($dados);
            return redirect(route('admin.cliente'));
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
        $clientes = $this->cliente->find($id);
        return view('cliente.perfil', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes =$this->cliente->find($id);

        return view('cliente.editar', compact('clientes'));
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
        $dados = $request->except(['_token', 'password']);


        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:6|max:50',
            'endereco' => 'required|min:10|max:255',
            'email' => 'required|min:10|max:50',
            'telefone' => 'required|min:9|max:15',
            'user' =>'required|min:5|max:50',

        ]);

        if($validator->fails()){

            return redirect(route('cliente.create'))
            ->withErrors($validator)
            ->withInput();

        }else{
           // $dados['password'] = bcrypt($dados['password']);
            $this->cliente->find($id);
            $this->cliente->update($dados);
            return redirect(route('admin.cliente'));
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
        $this->cliente->find($id);
        $this->ciente->delete($id);
        return redirect(route('admin.cliente'));

    }
}
