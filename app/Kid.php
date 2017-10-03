<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $fillable = ['firstname','anniversary','lastname'];
    protected $dates=['anniversary','created_at','updated_at'];

    public function getAgeAttribute()
    {
        return $this->anniversary->diffInYears();
    }

    public function getFullnameAttribute()
    {
        return $this->firstname.' '.$this->lastname;
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function behaviors()
    {
        return $this->belongsToMany('App\Behavior');
    }
}
