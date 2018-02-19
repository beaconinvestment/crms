<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = array('name', 'cell_no');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each customer HAS one investment to do
    public function investment() {
        return $this->hasMany('Investment'); // this matches the Eloquent model
    }






}
