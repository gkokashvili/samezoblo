<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $fillable = [
        'name'
    ];

    public function addresses()
    {
    	return $this->hasMany('App\Address');
    }

    public function getAddresses()
    {
        $addresses = $this->addresses;

        return $adresses;
    }
}
