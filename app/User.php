<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mobile', 'email', 'password', 'provider', 'provider_id', 'name', 'image', 'flingal_id', 'user_type','represent','looking_for',
        'company_name','city','user_status','date_of_birth','language','gender'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function userInformation()
    {
        return $this->hasOne('App\UserInformation');
    }
    
    public function userVideos()
    {
        return $this->hasMany('\App\Modules\User\Models\UserVideo');
    }
    public function userPhotos()
    {
        return $this->hasMany('\App\Modules\User\Models\UserPhoto');
    }
      public function userDocuments()
    {
        return $this->hasMany('\App\Modules\User\Models\UserDocument');
    }
    
      public function userEducations()
    {
        return $this->hasMany('\App\Modules\User\Models\Education');
    }
      public function userExp()
    {
        return $this->hasMany('\App\Modules\User\Models\Experience');
    }
      public function userPhysics()
    {
        return $this->hasOne('\App\Modules\User\Models\Physics');
    }
    
    public function artistOfTheDay()
    {
        return $this->hasOne('\App\Modules\User\Models\ArtistOfTheDay');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','user_roles','user_id','role_id');
    }

    public function isAdmin()
    {
        return Auth::user()->id == 1 ? 1 : 0;
    }

    public function hasPermission($action)
    {
        if(Auth::check())
        {
            $flag = 0;
            if(Auth::user()->isAdmin())
            {
                $flag = 1;
            }
            else
            {
                foreach(Auth::user()->roles as $role)
                {
                    foreach ($role->permissions as $permission)
                    {
                        if($permission->slug == $action)
                        {
                            $flag = 1;
                        }
                    }
                }
            }

            return $flag;
        }
        else
        {
            return 0;
        }
    }
}
