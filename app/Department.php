<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
   protected $fillable=[
     'name',
     'faculty_id'
   ];

public function faculty(){
  return $this->belongsTo('App\Faculty');
}

public function users(){
  return $this->hasMany('App\User');
}

public function admins(){
  return $this->hasMany('App\Admin');
}

public function courses(){
  return $this->hasMany('App\Course');
}
}
