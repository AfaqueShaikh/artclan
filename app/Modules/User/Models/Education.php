<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model {
    
    protected $table= "educations";
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
