<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = array('total_amount', 'customer_id');

    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------

    protected $table = 'investment';

    public static function create($array)
    {
    }

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function investment_type() {
        return $this->belongsTo('Investment_type');

    }
    public function customer(){
        return $this->hasMany('customer');
    }
}
