<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';

    protected $fillable = ['id', 'nome'];
/*
    public function ListProdutosCateg()
    {
        return $this->hasMany(Produto::class);
    }

*/
    
}
