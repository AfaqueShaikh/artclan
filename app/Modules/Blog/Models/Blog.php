<?php

namespace App\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

    //

    protected $table = 'blogs';
	 protected $fillable = ['title','slug','body'];


}
