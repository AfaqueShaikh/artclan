<?php

namespace App\Modules\ArtistContactRequest\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistRequest extends Model {

    protected $table = 'artist_request';
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
