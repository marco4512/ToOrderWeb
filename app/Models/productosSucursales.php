<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productosSucursales extends Model
{
    use HasFactory;
    protected $filable =[
        'idProductoSucursal',
        'fechaI',
        'fechaF',
        'Precio'
        ];
    public function productos(){
            return $this-> belongsto(productos::class);
        }
    public function Sucursales(){
            return $this-> belongsto(Sucursales::class);
        }
}
