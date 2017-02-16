<?php

namespace App\Http\Controllers;

use App\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    //
  public function index()
    {

      $editoras = Editora::all();

      return view('editora.index', compact('editoras'));

    }

  public function show(Editora $editora)
        {

      return view('editora.show', compact('editora'));

        }

}
