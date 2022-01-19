<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produtos;

class Itemvenda extends Model
{
    use HasFactory;

    protected $table = 'itemvenda';
    protected $primarykey = 'id';
    public $timestamps = false;



    public function produto(){
        return $this->hasOne(Produtos::class, 'id', 'id_produto');
    }

}
