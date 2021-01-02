<?php

namespace App\Services\Parser;

abstract class AbstractParser
{
   abstract public function createObject();

   abstract public function parse();
}
