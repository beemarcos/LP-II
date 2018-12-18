<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Entrust;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( Entrust::can('list-produto') ){
            $produtos = Produto::all();
            $categorias = Categoria::all();
            return view('produtos.index', compact('produtos', 'categorias'));
        } else {
            return redirect()->route('produto.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( Entrust::can('create-produto') ){
            $categorias = Categoria::all();
            return view('produtos.create', compact('categorias'));
        } else {
            return redirect()->route('produto.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
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
        if ( Entrust::can('create-produto') ){
            $this->validate($request, [
                'nome'         => 'required | unique:produtos | min:3',
                'preco'        => 'required',
                'icms'         => 'required',
                'id_categoria' => 'required',
                'saldo'        => 'required',
                'custo'        => 'required',
                'perecivel'    => 'required'
            ]);
            Produto::create($request->all());
            return redirect()->route('produto.index')->with('message', 'Item foi registrado com sucesso');
        } else {
            return redirect()->route('produto.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        if ( Entrust::can('show-produto') ) {
            $categorias = Categoria::all();
            return view('produtos.show', compact('produto', 'categorias'));
        } else {
            return redirect()->route('produto.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        if ( Entrust::can('edit-produto') ){
            $categorias = Categoria::all();
            return view('produtos.edit', compact('produto', 'categorias'));
        } else {
            return redirect()->route('produto.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        if ( Entrust::can('edit-produto') ) {
            $produto -> update($request -> all());
            return redirect()->route('produto.index') -> with('message', 'Ítem foi atualizado com sucesso');
        } else {
            return redirect()->route('produto.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        if ( Entrust::can('delete-produto') ) {
            $produto->delete();
            return redirect()->route('produto.index')->with('message', 'Ítem foi deletado com sucesso');
        } else {
            return redirect()->route('produto.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }
}
