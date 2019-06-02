<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class ProfileCounts extends Authenticatable
{
    protected $table = 'profile_count';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_id'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
