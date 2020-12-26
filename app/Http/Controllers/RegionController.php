<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use App\Region;

class RegionController extends Controller
{
    public function parseRegionsFile() {
        $reader = new Xlsx();
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load("regions.xlsx");
        $worksheet = $spreadsheet->getActiveSheet();

        foreach ($worksheet->getColumnIterator() as $row) {
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(FALSE);

            foreach ($cellIterator as $cell) {
                $region = new Region();
                $region->add($cell->getValue());
            }
        }
    }

}
