<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    use HasFactory;
    protected $filable =[
        'idAfiliado',
        'nombre',
        'Apellidos',
        'email',
        'password',
        'Telefono',
        'UrlImagen',
        'NombreDelNegocio',
        'UrlLogoNegocio'
        ];

}
