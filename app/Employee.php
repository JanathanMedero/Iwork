<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['user_id', 'name', 'slug', 'age'];

    public function User(){
		return $this->hasOne('App\User');
	}

	public function Jobs(){
		return $this->hasMany('App\Job');
	}

}
