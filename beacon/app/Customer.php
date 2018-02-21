<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = array('id','fname','lname', 'cell_no','cnic','address');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each customer HAS one investment to do
    public function investment() {
        return $this->hasMany(Investment::class); // this matches the Eloquent model
    }






}
