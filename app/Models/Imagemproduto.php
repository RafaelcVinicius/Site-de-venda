<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagemproduto extends Model
{
    use HasFactory;

    protected $table = 'imagemproduto';
    protected $primarykey = 'id';
    public $timestamps = false;

}
