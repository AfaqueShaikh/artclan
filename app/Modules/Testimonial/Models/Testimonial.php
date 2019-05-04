<?php

namespace App\Modules\Testimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

    //

    protected $table = 'testimonial';
	 protected $fillable = ['image','name','description'];


}
