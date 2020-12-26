<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Parsers;
use Illuminate\Support\Facades\Redirect;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Jobs\ParseRegions;
use App\Jobs\ParseRegionsProvincies;

class ServiceController extends Controller
{
    private $fileName;

    public function __construct()
    {
        $this->fileName = "oblast_rayon_gorod.xlsx";
    }

    public function retryUntil()
    {
        return now()->addSeconds(5);
    }

    public function parseRegionsFile(Request $request) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        ParseRegions::dispatchAfterResponse($reader, $this->fileName);
        echo "Всё хорошо";
    }

    public function parseRegionsProvinciesCitiesFile(Request $request) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        ParseRegionsProvincies::dispatchAfterResponse($reader, $this->fileName);
        echo "Всё хорошо";
    }
}
