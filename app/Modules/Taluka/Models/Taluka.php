<?php

namespace App\Modules\Taluka\Models;

use Illuminate\Database\Eloquent\Model;

class Taluka extends Model {

    public function district()
    {
        return $this->belongsTo('App\Modules\District\Models\District','district_id','id');
    }
}
