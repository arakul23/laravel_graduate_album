<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use Illuminate\Http\Request;
use App\Events\incrementViews;

class FacultyController extends Controller
{
    public function getDepartmentsByFacultyId(Request $request)
    {
        $faculty = new Faculty();
        $facultyId = $request->id;

        $departmentsList = Department::where('faculty_id', $facultyId)->get();

        $this->incrementViews($facultyId, $faculty);

        return view ("departments", [
            "departments" => $departmentsList
        ]);
    }

    public function incrementViews(int $id, object $model)
    {
        incrementViews::dispatch($id, $model);
    }
}
