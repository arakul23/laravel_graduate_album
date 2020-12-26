<?php


namespace App\Services\Parser;

use App\Services\Parser\AbstractParser;
use App\Student;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;


class StudentsParser extends AbstractParser
{
    public function createObject()
    {
        return new Xlsx();
    }

    public function parseStudents() {
        $xls = $this->createObject();
        $fileRead = $xls->load('students.xlsx');
        $worksheet = $fileRead->getActiveSheet();
    }

}
