<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pheanstalk\Exception;

class Faculty extends Model
{
    protected $table = 'faculties';
    use HasFactory;

    public function departments() {
        return $this->hasMany('app\Department');
    }

    public function byViews() {
        return Faculty::orderByDesc('count_views')->take(5)->get();
    }
}
