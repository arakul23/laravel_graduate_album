<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Validator;


class Cities extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'region_id', 'province_id'];

    public function add(string $name, int $region_id, int $province_id)
    {
        $validator = Validator::make(['name' => $name, 'region_id' => $region_id, 'province_id' => $province_id], [
            'name' => 'required',
            'region_id' => 'required',
            'province_id' => 'required',
        ]);

        if ($validator->fails()) {
            return false;
        }

        $city = Cities::firstOrCreate([
            'name' => $name,
            'region_id' => $region_id,
            'province_id' => $province_id,
        ]);

        return true;
    }

    public function byName(string $name) {
        return Cities::where('name', $name)->get();
    }

}
