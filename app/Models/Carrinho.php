<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $table = 'carrinho';
    protected $primarykey = 'id';
    public $timestamps = false;


    public function produto(){
        return $this->hasOne(Produtos::class, 'id_produto', 'id');
    }
}
