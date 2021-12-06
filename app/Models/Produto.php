<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "produto";
    protected $fillable = ['categoria','descricao','valor','procedencia','title', 'content', 'image'];
/*
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
    */

}
