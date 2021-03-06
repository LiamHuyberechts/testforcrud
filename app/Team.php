<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
    ];
    public function students(){
        return $this->hasMany("App\Student");
    }

    public function session(){
        return $this->belongsTo('App\Session')->withDefault();
    }
}
