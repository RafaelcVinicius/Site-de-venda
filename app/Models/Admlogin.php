<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admlogin extends Model
{
    use HasFactory;

    protected $table = 'admlogin';
    protected $primarykey = 'id';
    public $timestamps = false;
}
