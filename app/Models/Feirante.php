<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feirante extends Model
{
    use HasFactory;

    protected $table = "feirante";
    protected $fillable = ['nome','cpf','telefone','login','senha', 'endereco'];
}
