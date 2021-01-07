<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Validator;


class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';
    protected $fillable = ['name', 'region_id'];

    public function region() {
        return $this->hasMany('App\Region');
    }

    public function add(string $name, int $region_id)
    {
        $validator = Validator::make(['name' => $name, 'region_id' => $region_id], [
            'name' => 'required',
            'region_id' => 'required',
        ]);

        if ($validator->fails()) {
            return false;
        }

        $region = Province::firstOrCreate([
            'name' => $name,
            'region_id' => $region_id
        ]);

        return true;
    }

    public function byName(string $name) {
       return Province::where('name', $name)->get();
    }
}
