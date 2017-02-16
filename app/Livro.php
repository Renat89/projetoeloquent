<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

   public function editora()
    {
      return $this->belongsTo(Editora::class);
    }
}
