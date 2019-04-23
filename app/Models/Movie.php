<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'year'
    ];


    public function director(){
        return $this->belongsTo('App\Models\Movie');
    }

    public function actors(){
        return $this->belongsToMany('App\Models\Artist');
    }

    public function showtime(){
        return $this->hasMany('App\Models\Showtime');
    }
}
