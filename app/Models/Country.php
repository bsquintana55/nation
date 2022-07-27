<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
        //1. tabla a conectar

        protected $table = "countries";

        //2. clave primaria de la tabla
    
        protected $primaryKey = "country_id";
    
        // omitir campos de auditoria- timestamp
    
        public $timestamps = false;
        


    use HasFactory;
}
