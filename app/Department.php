<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * obtiene los municipios  para este departamento
     */
    public function municipalities()
    {
        return $this->hasMany('App\Municipality');
    }

    /**
     * obtiene el pais para este departamento
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
