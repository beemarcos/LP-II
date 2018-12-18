<?php

namespace App\Http\Controllers;

use App\Categoria;

use Illuminate\Http\Request;
use Entrust;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if ( Entrust::can('list-categoria') ) {
            $categorias = Categoria::all();
            return view ('categorias.index', compact('categorias'));
        } else {
            return redirect()->route('categoria.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( Entrust::can('create-categoria') ) {
            return view('categorias.create');
        } else {
            return redirect()->route('categoria.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
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
        if ( Entrust::can('create-categoria') ){
            $this -> validate($request, [
                'nome' => 'required | unique:categorias | min:3'
            ]);
    
            Categoria::create($request -> all());
            return redirect()->route('categoria.index')->with('message', 'Ítem foi adicionado com sucesso');
        } else {
            return redirect()->route('categoria.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        if ( Entrust::can('show-categoria') ){
            return view('categorias.show', compact('categoria'));
        } else {
            return redirect()->route('categoria.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        if ( Entrust::can('edit-categoria') ){
            return view('categorias.edit', compact('categoria'));
        } else {
            return redirect()->route('categoria.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        if ( Entrust::can('edit-categoria') ){
            $categoria->update($request->all());
            return redirect()->route('categoria.index')->with('message', 'Ítem foi atualizado com sucesso');
        } else {
            return redirect()->route('categoria.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        if ( Entrust::can('delete-categoria') ) {
            $categoria->delete();
            return redirect()-> route('categoria.index')->with('message', 'Ítem foi deletado com sucesso');
        } else {
            return redirect()->route('categoria.index')->with('message-error', 'Ação negada! Você não tem permissão para executar esta tarefa');
        }
    }
}
