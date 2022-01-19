<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Itemvenda;

class Vendas extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    protected $primarykey = 'id';
    public $timestamps = true;


    public function itens(){
        return $this->hasMany(Itemvenda::class, 'id_venda', 'id');
    }
}
