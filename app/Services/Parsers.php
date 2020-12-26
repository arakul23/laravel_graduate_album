<?php

namespace App\Services;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Region;
use App\Province;
use App\Cities;

class Parsers
{
    private static $fileName;
    private static $excelObj;

    public function __construct(object $excelObj, string $fileName)
    {
        self::$fileName = $fileName;
        self::$excelObj = $excelObj;
    }

    public function parseRegions() {
        $spreadsheet = self::$excelObj->load(self::$fileName);
        $worksheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        foreach ($worksheet as $row) {
            if ($row['A'] !== null) {
                $region = new Region();
                $region->add($row['A']);
            }
        }
        $this->parseProvincies($worksheet);
    }

    public function parseProvincies(array $worksheet)
    {
        $regionId = null;
        foreach ($worksheet as $row) {
                $province = new Province();
                $resultRegion = Region::where('name', $row['A'])->get();
                $resultProvince = Province::where('name', $row['B'])->where('region_id', $resultRegion[0]->id)->get();

            if (!$resultRegion->isEmpty()) {
                $regionId = $resultRegion[0]->id;
            }

            if ($resultProvince->isEmpty() && $row['B'] !== null) {
                $provinceName = $row['B'];
                $province->add($provinceName, $regionId);
            }
        }
        $this->parseCities($worksheet);
    }

    public function parseCities(array $worksheet) {
        foreach ($worksheet as $row) {
            $cities = new Cities();
            $resultRegion = Region::where('name', $row['A'])->get();
            $resultProvince = Province::where('name', $row['B'])->where('region_id', $resultRegion[0]->id)->get();

            $regionId = $resultRegion->isEmpty() ? 0 : $resultRegion[0]->id ;
            $provinceId = $resultProvince->isEmpty() ? 0 : $resultProvince[0]->id;
            $resultCity = Cities::where('name', $row['C'])->
            where('region_id', $regionId)
                ->where('province_id', $provinceId)
                ->get();

            if ($resultCity->isEmpty()) {
                $name = trim($row['C']);
                $cities->add($name, $regionId, $provinceId);
            }
        }
    }
}
