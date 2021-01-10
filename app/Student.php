<?php

namespace App;

use Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    protected $table = 'students';
    use HasFactory;

    public function createObject()
    {
        return new Student();
    }

    public function department()
    {
        return $this->hasOne('App/Department');
    }

    public function faculty()
    {
        return $this->hasOne('App/Faculty');
    }

    public function city()
    {
        return $this->hasOne('App/City');
    }

    public function province()
    {
        return $this->hasOne('App/Province');
    }

    public function region()
    {
        return $this->hasOne('App/Region');
    }

    public function country()
    {
        return $this->hasOne('App/Country');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    public function byDepartmentId($id)
    {
        return Student::where('department_id', $id)->paginate(15);
    }

    public function byId($id)
    {
        return Student::with('photo')->where('id', $id)->get();
    }

    public function add(
        string $name,
        string $surname,
        string $patronymic,
        int $provinceId,
        int $regionId,
        int $cityId,
        int $countryId,
        string $lastPlaceStudy,
        bool $redDiploma,
        string $yearAdmission,
        string $typeTraining
    ) {

        $validator = Validator::make([
            'name' => $name,
            'surname' => $surname,
            'provinceId' => $provinceId,
            'regionId' => $regionId,
            'redDiploma' => $redDiploma
        ],
            [
                'name' => 'required',
                'surname' => 'required',
                'provinceId' => 'required',
                'redDiploma' => 'required',
            ]
        );
        if ($validator->fails()) {
            $error = "failed";
            dd($validator->errors());
        }

        $student = new Student();
        $student->name = trim($name);
        $student->surname = trim($surname);
        $student->patronymic = trim($patronymic);
        $student->province_id = $provinceId;
        $student->region_id = $regionId;
        $student->city_id = $cityId;
        $student->country_id = $countryId;
        $student->last_place_study	= trim($lastPlaceStudy);
        $student->faculty_id = 1;
        $student->department_id = 1;
        $student->red_diploma = $redDiploma;
        $student->year_admission = $yearAdmission;
        $student->type_training = trim($typeTraining);
        $student->save();
    }

}
