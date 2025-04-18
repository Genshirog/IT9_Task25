<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    public function employees(){
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
