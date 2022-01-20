<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Itemvenda;
use App\Models\Enderecouser;



class Vendas extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    protected $primarykey = 'id';
    public $timestamps = true;


    public function itens(){
        return $this->hasMany(Itemvenda::class, 'id_venda', 'id');
    }

    public function endereco(){
        return $this->hasOne(Enderecouser::class, 'id', 'id_endereco');
    }
}
