<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'Produtos';
    protected $primarykey = 'id';
    public $timestamps = false;

    public function imagem(){
        return $this->hasOne(Imagemproduto::class, 'id_produto', 'id');
    }
}
