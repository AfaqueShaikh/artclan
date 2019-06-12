<?php

namespace App\Modules\ArtistRecruiterRequest\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistRecruiterRequest extends Model {

    protected $table = 'artist_request_for_recruiter_account';
    public function user()
    {
        return $this->hasOne('App\User','id','artist_id');
    }
}
