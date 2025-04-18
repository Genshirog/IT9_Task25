<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function countries(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}
