<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function department(){
      return $this->hasOne('app/Department');
    }

    public function byDepartmentId($id) {
      return Student::where('id_department', $id)->get();
    }

}
