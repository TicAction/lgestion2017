<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

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
    public function setAnniversaryAttribute($anniversary)
    {
       $this->attributes['anniversary'] = Date::createFromFormat('d-m-Y',$anniversary);
    }
}
