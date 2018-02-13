<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = array('total_amount', 'customer_id');

    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------

    protected $table = 'investment';

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function investment() {
        return $this->belongsTo('Investment_type');

    }
    public function customer(){
        return $this->hasMany('Investment');
    }
}
