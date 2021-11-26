<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrabajadorComandas extends Model
{
    use HasFactory;
    protected $filable =[
        'idcomandaTrabajadores'
        ];
  public function comandas(){
            return $this->belongsto(comandas::class);
        }
  public function trabajadores(){
            return $this->belongsto(trabajadores::class);
        }
}
