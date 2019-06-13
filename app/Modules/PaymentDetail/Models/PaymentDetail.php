<?php

namespace App\Modules\PaymentDetail\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model {

    protected $table = 'payment_details';

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
