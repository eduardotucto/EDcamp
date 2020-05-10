<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        "name",
        "lastname",
        "email",
        "state",
        "peruvian",
        "assistance",
        "phone",
        "idCompany"
    ];

    public function company(){
        return $this->belongsTo('App/Empresa','idCompany');
    }
}
