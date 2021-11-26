<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SucursalTrabajadores extends Model
{
    use HasFactory;
  

    protected $filable =[
        'idSucursalTrabajador'
       
        ];
        public function Sucursales(){
            return $this->belongsto(Sucursales::class);
        }
        public function trabajadores(){
            return $this->belongsto(trabajadores::class);
        }
       

}
