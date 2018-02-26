<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function index($id)
    {
        return "this is the sent id" . $id;
    }
}
