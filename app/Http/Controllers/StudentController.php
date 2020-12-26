<?php

namespace App\Http\Controllers;

use App\Events\incrementViews;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function getById(Request $request)
    {
        $student = new Student();
        $studentId = $request->id;
        $studentInfo = $student->byId($studentId);

        $this->incrementViews($studentId, $student);

        return view ("studentInfo", ["studentInfo" => $studentInfo]);
    }

    public function incrementViews(int $id, object $model) {
        incrementViews::dispatch($id, $model);
    }

}
