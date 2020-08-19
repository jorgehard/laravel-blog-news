<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ControladorCategoria extends Controller
{
    public function index()
    {
        $cats = Categoria::all();
        return view('categorias', compact('cats'));
    }

    public function create()
    {
        return view('creates.nova_categoria');
    }

    public function store(Request $request)
    {
        $cat = new Categoria();
        $cat->nome = $request->input('nomeCategoria');
        $cat->save();
        return redirect('/categorias');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cat = Categoria::find($id);
        if (isset($cat)) {
            return view('edit.editar_categoria', compact('cat'));
        }
        return redirect('/categorias');
    }

    public function update(Request $request, $id)
    {
        $cat = Categoria::find($id);
        if (isset($cat)) {
            $cat->nome = $request->input('nomeCategoria');
            $cat->save();
        }
        return redirect('/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Categoria::find($id);
        if (isset($cat)) {
            $cat->delete();
        }
        return redirect('/categorias');
    }

    //RETORNANDO API

    public function indexJson()
    {
        $cats = Categoria::all();
        return json_encode($cats);
    }
}
