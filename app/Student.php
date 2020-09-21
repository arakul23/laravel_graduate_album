<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    return $this->hasOne('app/Department');
}
