<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    use HasFactory;
    protected $filable =[
        'idSucursal',
        'Direccion',
        ];
        public function planes(){
            return $this->belongsto(Planes::class);
        }
        public function productosSucursales(){
            return $this-> hasMany(productosSucursales::class);
        }
        public function MesaSucursales(){
            return $this-> hasMany(MesaSucursales::class);
        }
        public function SucursalTrabajadores(){
            return $this-> hasMany(SucursalTrabajadores::class);
        }
}
