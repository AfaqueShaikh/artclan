<?php

namespace App\Modules\FeaturedPatner\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedPatner extends Model {

    //

    protected $table = 'featured_patners';
	 protected $fillable = ['image','name','url ','description'];


}
