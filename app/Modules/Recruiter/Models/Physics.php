<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class Physics extends Model {
    
    protected $table= "physical_attributes";
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
