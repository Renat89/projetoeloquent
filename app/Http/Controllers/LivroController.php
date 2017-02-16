<?php

namespace App\Http\Controllers;

use App\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    //
  public function index()
    {

      $livros = Livro::all();

      return view('livro.index', compact('livros'));

    }

  public function show(Livro $livro)
        {

      return view('livro.show', compact('livro'));

        }

}
