<?php

namespace App\Modules\District\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model {

    public function state()
    {
        return $this->belongsTo('App\Modules\State\Models\State','state_id','id');
    }
    
    public function talukas()
    {
        return $this->hasMany('App\Modules\Taluka\Models\Taluka','district_id','id');
    }

}
