<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'name',
        'description'
        ];
    public function teams()
    {
        return $this->hasMany('App\Team');
    }
}
