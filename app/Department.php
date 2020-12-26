<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    public function faculty() {
        return $this->hasOne('app/Faculty');
    }

    protected $table = 'departments';

}
