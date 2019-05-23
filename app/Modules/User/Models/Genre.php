<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

    protected $table = 'genres';
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
