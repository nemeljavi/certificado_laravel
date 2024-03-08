<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    use HasFactory;
    protected $fillable =["idioma"];

    public function alumnos(){
        return $this->belongsTo(Alumno::class);
    }


}
