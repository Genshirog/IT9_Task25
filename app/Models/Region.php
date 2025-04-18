<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function employees(){
        return $this->hasMany(Country::class, 'region_id');
    }
}
