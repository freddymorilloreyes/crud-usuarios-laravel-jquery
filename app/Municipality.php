<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    /**
     * obtiene el departamento para este municipio
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    /**
     * obtiene los usuarios en esta municipalidad
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
