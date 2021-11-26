<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $fillable =[
    'idCategorias',
    'Descripcion'
    ];
    public function productos(){
        return $this-> hasMany(productos::class);
    }
}

