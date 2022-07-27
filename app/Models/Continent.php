<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{

//una tabla corresponde a un modelo

    //1. tabla a conectar

    protected $table = "continents";

    //2. clave primaria de la tabla

    protected $primaryKey = "continent_id";

    // omitir campos de auditoria- timestamp

    public $timestamps = false;

    


    use HasFactory;
}
