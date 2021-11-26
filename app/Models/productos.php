<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorias;
class productos extends Model
{
    use HasFactory;
    protected $fillable =[
        'idProducto',
        'Descripcion',
        'UrlImagen'
        ];
        public function Categorias(){
            return $this->belongsto(Categorias::class);
        }
        public function productosSucursales(){
            return $this-> hasMany(productosSucursales::class);
        }
        public function ProductosComanda(){
            return $this-> hasMany(ProductosComanda::class);
        }
}
