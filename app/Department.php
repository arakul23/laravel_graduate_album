<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function faculty() {
        return $this->hasOne('app/Faculty');
    }

    protected $table = 'departments';

}
