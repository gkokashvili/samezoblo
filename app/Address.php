<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable = [
        'name', 'number', 'floors', 'city_id'
    ];

    public function users() 
    {
    	return $this->hasMany('App\User');
    }

    public function city()
    {
    	return $this->belongsTo('App\City');
    }

    public function taxes()
    {
        return $this->hasMany('App\Tax');
    }

    public function getUsers()
    {
        $users = $this->users;

        return $users;
    }

    public function getTaxes()
    {
        $taxes = $this->taxes;

        return $taxes;
    }
}
