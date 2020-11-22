<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Photo;

class Student extends Model
{
    protected $table = 'students';
    use HasFactory;

    public function department(){
      return $this->hasOne('App/Department');
    }

    public function photo(){
        return $this->hasMany('App\Photo');
    }

    public function byDepartmentId($id) {
      return Student::where('department_id', $id)->get();
    }

    public function byId($id) {
        return Student::with('photo')->where('id', $id)->get();
    }

}
