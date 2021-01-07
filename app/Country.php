<?php

namespace App;

use Validator;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  public function add($name)
  {
    $validator = Validator::make(['name' => $name], [
      'name' => 'required',
    ]);
    if ($validator->fails()) {
      $error = "failed";
      dd($error);
    }

    $country = new Country;
    $country->name = trim($name);
    $country->save();
  }

    public function byName(string $name) {
        return Country::where('name', $name)->get();
    }
}
