<?php

namespace App\Http\Controllers;

use App\Events\incrementViews;
use App\Student;
use Illuminate\Http\Request;
use App\Services\Parser\StudentsParser;

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

    public function parse(StudentsParser $parser) {
        $parser->parse();
    }
}
