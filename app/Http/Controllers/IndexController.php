<?php


namespace App\Http\Controllers;

use App\Department;
use App\Faculty;

class IndexController
{
    public function index()
    {
        $faculties = Faculty::all();

        return view('index', [
            "faculties" => $faculties,
        ]);
    }
}
