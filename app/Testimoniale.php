<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoniale extends Model
{
    public function reverse()
    {
        return $this->hasMany('App\Reverse');
    }
}
