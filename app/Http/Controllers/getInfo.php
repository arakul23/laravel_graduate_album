<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;

class getInfo extends Controller
{
    public function getFacultiesAll() {
        $faculties = Faculty::all();
    }
}
