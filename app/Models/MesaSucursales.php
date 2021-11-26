<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesaSucursales extends Model
{
    use HasFactory;
    protected $filable =[
        'idMesaSucursal'
        ];
        public function Mesa(){
            return $this->belongsto(Mesa::class);
        }
        public function Sucursales(){
            return $this->belongsto(Sucursales::class);
        }
}
