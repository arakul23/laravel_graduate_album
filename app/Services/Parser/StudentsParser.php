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

    public function parse() {
        $xls = $this->createObject();
        $fileRead = $xls->load('documents/faculties/Ecomomicy, bisnesy ta kontroly(Economica).xlsx');
        $worksheet = $fileRead->getActiveSheet()->toArray(null, true, true, true);
        foreach ($worksheet as $row) {
            $fullNameArray = explode(' ', $row['A']);
            $name = $fullNameArray[0];
            $surname = $fullNameArray[1];
            $patronymic = $fullNameArray[2];
            $lastPlaceStudy = $row['C'];
            $redDiploma = $row['D'];
            $yearAdmission = $row['E'];
            $typeTraining = $row['F'];
            dd($row);
        }

    }

}
