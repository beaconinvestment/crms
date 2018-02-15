<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investmenttype extends Model
{
    protected $fillable = array('type', 'customer_id');

    public static function create($array)
    {

    }

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function investment() {
        return $this->hasMany('Investment');
    }

}
