<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $fillable = [
        'code', 'theatre_name', 'room_num', 'movie_id', 'title_movie', 'begin', 'end'
    ];

    public function theatre(){
        return $this->hasMany('App\Models\Movie');
    }

    public function theatreName(){
        return $this->belongsToMany('App\Models\Theatre')->withPivot('name');
    }
}
