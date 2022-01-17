<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemvenda extends Model
{
    use HasFactory;

    protected $table = 'itemvenda';
    protected $primarykey = 'id';
    public $timestamps = false;
}
