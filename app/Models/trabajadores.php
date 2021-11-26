<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabajadores extends Model
{
    use HasFactory;
    protected $filable =[
        'idTrabajadores',
        'nombre',
        'apellidos',
        'fechaNacimiento',
        'Token de Ingreso',
        'Password',
        'UrlImagen'
        ];
        public function Roles(){
            return $this->belongsto(Roles::class);
        }
        public function productos(){
            return $this-> hasMany(productos::class);
        }
        public function TrabajadorComandas(){
            return $this-> hasMany(TrabajadorComandas::class);
        }
}
