<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosComanda extends Model
{
    use HasFactory;
    protected $filable =[
        'idProductosComanda',
        'cantidad',
        'precio'
        ];
 public function productos(){
            return $this->belongsto(productos::class);
        }
        public function comandas(){
            return $this->belongsto(comandas::class);
        }
}
