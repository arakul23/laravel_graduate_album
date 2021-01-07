<?php


namespace App\Services\Parser;

use App\Cities;
use App\Country;
use App\Province;
use App\Region;
use App\Student;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;


class StudentsParser extends AbstractParser
{

    public function parse() {
        $xls = new Xlsx();
        $student = new Student();
        $fileRead = $xls->load('documents/faculties/Ekonomiky, biznesy ta kontroly(Oblik ta opodatkuvannya).xlsx');
        $worksheet = $fileRead->getActiveSheet()->toArray(null, true, true, true);
        foreach ($worksheet as $row) {
            $fullNameArray = explode(' ', $row['A']);
            $name = $fullNameArray[0];
            $surname = $fullNameArray[1];
            $patronymic = isset($fullNameArray[2]) ? $fullNameArray[2] : '' ;
            $provinceName = $row['B'];
            $regionName = $row['C'];
            $cityName = $row['D'];
            $lastPlaceStudy = !empty($row['E']) ? $row['E'] : '';
            $redDiploma = $row['F'] === 'Так' ? true : false;
            $yearAdmission = $row['G'];
            $typeTraining = $row['H'];
            $country = $row['I'];
            $provinceId = !empty($provinceName) ? $this->getProvinceId($provinceName) : 0;
            $regionId = !empty($regionName) ? $this->getRegionId($regionName) : 0;
            $cityId = !empty($cityName) ? $this->getCityId($cityName) : 0;
            $countryId = !empty($country) ? $this->getCountryId($country) : 0;
            $checkDuplicateStudent = $this->checkDuplicateStudentByFullName($name, $surname, $patronymic);

            if (!$checkDuplicateStudent) {
                $student->add($name, $surname, $patronymic, $provinceId, $regionId, $cityId, $countryId, $lastPlaceStudy,
                    $redDiploma, $yearAdmission, $typeTraining);
            } else {
                continue;
            }
        }
    }

    private function getProvinceId(string $name) : int {
        $region = new Region();
        $regionObject = $region->byName($name);

        return count($regionObject) > 0 ? $regionObject[0]['id'] : 0;
    }

    private function getRegionId(string $name) : int {
        $province = new Province();
        $provinceObject = $province->byName($name);

        return count($provinceObject) > 0 ? $provinceObject[0]['id'] : 0;
    }

    private function getCityId(string $name) : int {
        $city = new Cities();
        $cityObject = $city->byName($name);

        return count($cityObject) > 0 ? $cityObject[0]['id'] : 0;
    }

    private function getCountryId(string $name) : int {
        $country = new Country();
        $countryObject = $country->byName($name);

        return count($countryObject) > 0 ? $countryObject[0]['id'] : 0;
    }

    private function checkDuplicateStudentByFullName(string $name, string $surname, string $patronymic) : bool {
        return Student::where('name', $name)->where('surname', $surname)->where('patronymic', $patronymic)->exists();
    }
}
