<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    protected $fillable = ['behavior','behave_date'];
    protected $dates = ['created_at','behave_date','updated_at'];

    public function kids()
    {
        return $this->belongsToMany('App\Kid');
    }
}