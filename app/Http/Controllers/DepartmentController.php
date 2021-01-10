<?php

namespace App\Http\Controllers;

use App\Department;
use App\Events\incrementViews;
use App\Faculty;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function getStudentsByDepartmentId(Request $request)
    {
        $student = new Student();
        $department = new Department();
        $departmentId = $request->id;

        $studentList = $student->byDepartmentId($departmentId);

        $this->incrementViews($departmentId, $department);

        return view ("students", [
            "students" => $studentList,
        ]);
    }

    public function getDepartmentsList() : View {
        $departmentsList = Department::paginate(15);

        return view("departments", ['departments' => $departmentsList]);
    }

    public function incrementViews(int $id, object $model) {
        incrementViews::dispatch($id, $model);
    }

}
