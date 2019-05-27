<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * obtiene los departamentos para este pais
     */
    public function departments()
    {
        return $this->hasMany('App\Department');
    }
}
