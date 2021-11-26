<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasFactory;
    protected $filable =[
        'idplan',
        'Descripcion',
        'Precio'
        ];
public function Sucursales(){
            return $this-> hasMany(Sucursales::class);
        }
}
