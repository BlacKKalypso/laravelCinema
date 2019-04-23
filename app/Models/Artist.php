<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
      'last_name', 'first_name', 'births_date'
    ];

    public function movies_directed(){
        return $this->hasMany('App\Models\Movie');
    }

    public function movies_played(){
        return $this->belongsTo('App\Models\Movie')->withPivot('role_name');
    }

}
