<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        "idStudent",
        "idCost"
    ];

    public function students(){
        return $this->belongsTo('App/Alumno','idStudent');
    }

    public function cost(){
        return $this->belongsTo('App/Precio','isCost');
    }
}
