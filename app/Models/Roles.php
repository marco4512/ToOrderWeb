<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $filable =[
        'idRol',
        'Tipo'
        ];
    public function trabajadores(){
     return $this-> hasMany(trabajadores::class);
    }
}
