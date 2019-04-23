<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'code', 'theatre_name', 'room_num', 'air_conditioned', 'capacity'
    ];

    public function theatre(){
        return $this->belongsTo('App\Models\Theatre');
    }
}
