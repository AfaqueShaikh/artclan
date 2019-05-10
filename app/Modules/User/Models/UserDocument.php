<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model {
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
