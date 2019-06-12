<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model {
    
    protected $table = "work_experience";
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
