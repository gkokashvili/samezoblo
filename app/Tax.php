<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $fillable = [
        'name', 'address_id', 'amount'
    ];

    public function address()
    {
    	return $this->belongsTo('App\Address');
    }

    public function getAddress()
    {
    	$address = $this->address;

    	return $address;
    }
}
