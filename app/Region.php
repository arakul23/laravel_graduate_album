<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';
    protected $fillable = ['name'];

    public function province() {
        return $this->hasMany('App\Province');
    }

    public function add($name)
    {
        $validator = Validator::make(['name' => $name], [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return false;
        }

        $region = Region::firstOrCreate([
            'name' => $name
        ]);

        return true;
    }

}
