<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function getByDepartmentId(Request $request) {
      $student = new Student();
      $studentList = $student->byDepartmentId($request->id);
      return view ("students", ["students" => $studentList]);
    }

    public function getById(Request $request) {
        $student = new Student();
        $studentInfo = $student->byId($request->id);
        return view ("studentInfo", ["studentInfo" => $studentInfo]);
    }
}
