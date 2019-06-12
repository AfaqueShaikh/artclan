<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistOfTheDay extends Model {
    protected $table = "artist_of_the_day";
    
    
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
