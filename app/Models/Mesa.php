<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $filable =[
        'idMesa',
        'nombreMesa',
        'imagenqrl'
        ];
public function MesaSucursales(){
            return $this-> hasMany(MesaSucursales::class);
        }
public function comandas(){
            return $this-> hasMany(comandas::class);
        }
}
