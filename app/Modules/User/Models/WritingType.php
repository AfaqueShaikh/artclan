<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class WritingType extends Model {

    protected $table = 'writing_type';
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
