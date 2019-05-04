<?php

namespace App\Modules\State\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

    public function country()
    {
        return $this->belongsTo('App\Modules\Country\Models\Country','country_id','id');
    }

}
