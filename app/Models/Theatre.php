<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    protected $fillable = [
        'name', 'address'
    ];

    public function movie_showtime(){
        return $this->hasMany('App\Models\Movie');
    }

    public function theatre_rooms(){
        return $this->hasMany('App\Models\Room');
    }

    public function showtime(){
        return $this->belongsToMany('App\Models\Showtime')->withPivot('theatre_name');
    }
}
