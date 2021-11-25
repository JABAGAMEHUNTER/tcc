<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rmodel extends Model
{
    use HasFactory;
    protected $primarykey = "id";

    public $timestamps = true;//created at
    public $incrementing = true;
    protected $fillable = [];

    public function beforeSave(){
        return true;
    }
    public function save(array $options = []){
        try{
            if($this->beforeSave()){
                return false;
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
/*
    public function ListProdutosCateg()
    {
        return $this->hasMany(Produto::class);
    }

*/
    
}
