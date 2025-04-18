<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PDO;

class Employee extends Model
{
    public function department(){
        return $this->belongsTo(Department::class,'deparment_id');
    }

    public function subordinates(){
        return $this->hasMany(Employee::class,'manager_id');
    }

    public function manager(){
        return $this->belongsTo(Employee::class,'manager_id');
    }
}
