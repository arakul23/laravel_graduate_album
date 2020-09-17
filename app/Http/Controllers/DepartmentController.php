<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    function getByFacultyId(Request $request) {
        return $departmentsList = Department::where('id_faculty', $request->id)->get();
    }
}
