<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investmenttype extends Model
{
    protected $fillable = array('type', 'customer_id');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function bear() {
        return $this->hasMany('Investment');
    }

}
