<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class VerifyNumber extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $teble = 'verify_numbers';

    protected $fillable = [
        'mobile_number','otp'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
