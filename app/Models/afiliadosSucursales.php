<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class afiliadosSucursales extends Model
{
    use HasFactory;
    protected $filable =[
        'idafiliadosSucursales'
        ];
        public function Sucursales(){
            return $this->belongsto(Sucursales::class);
        }
        public function Afiliado(){
            return $this->belongsto(Afiliado::class);
        }
}
