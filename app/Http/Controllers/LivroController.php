<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = DB::select('select * from livros');
        return view('welcome', ['livros' => $livros]);
    }

    public function livro($id)
    {
        $livro = DB::table('livros')->where('id', $id)->first();
        return view('form_livro', ['livro' => $livro]);
    }

    public function editar(Request $request)
    {
        DB::table('livros')
            ->where('id', $request->id)
            ->update([
                'titulo' => $request->titulo,
                'isbn' => $request->isbn,
                'categoria' => $request->categoria,
                'autor' => $request->autor,
                'editora' => $request->editora,
                'edicao' => $request->edicao,
                'volume' => $request->volume,
                'qtd_paginas' => $request->qtd_paginas,
                'data_pub' => $request->data_pub,
            ]);
        
        return redirect()->route('livros');
    }

    public function excluir($id)
    {
        DB::table('livros')->where('id', '=', $id)->delete();
        return redirect()->route('livros');
    }
    
    public function cadastro(Request $request)
    {
        DB::table('livros')->insert([
            'titulo' => $request->titulo,
                'isbn' => $request->isbn,
                'categoria' => $request->categoria,
                'autor' => $request->autor,
                'editora' => $request->editora,
                'edicao' => $request->edicao,
                'volume' => $request->volume,
                'qtd_paginas' => $request->qtd_paginas,
                'data_pub' => $request->data_pub,
        ]);

        return redirect()->route('livros');
    }
}