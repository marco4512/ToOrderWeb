<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comandas extends Model
{
    use HasFactory;
    protected $fillable =[
        'idComanda',
        'Horainicio',
        'fecha'
        ];
        public function Mesa(){
            return $this->belongsto(Mesa::class);
        }
        public function TrabajadorComandas(){
            return $this-> hasMany(TrabajadorComandas::class);
        }
        public function ProductosComanda(){
            return $this-> hasMany(ProductosComanda::class);
        }
}
