<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto2s';

    protected $fillable = ['nome', 'imagem', 'categoria'];
}
