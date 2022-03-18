<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    protected $fillable = [
        'name',
        'rnumber',
        'team_id',
        'active'
        ];
    public function team(){
        return $this->belongsTo(
            "App\Team")->withDefault();
    }
}
