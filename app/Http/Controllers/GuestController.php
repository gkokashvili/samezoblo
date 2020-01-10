<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\User;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function index()
    {
    	return 'Guest';
    }

    public function create()
    {
    	return view('create');
    }

    public function store(Request $request)
    {
    	$address = Address::where('name', $request->streetName)->where('number', $request->streetNumber)->first();

    	if ($address) {
    		$address_id = $address->id;
     	}else{
     		DB::table('addresses')->insert([
     			'name' 		=> $request->streetName,
     			'number' 	=> $request->streetNumber
     		]);
            $address = Address::where('name', $request->streetName)->where('number', $request->streetNumber)->first();
            $address_id = $address->id;
     	}

     	User::create([
     		'name'   		   	=> $request->name,
     		'email' 		   	=> $request->Email,
     		'password'         	=> $request->password,
     		'address_id'       	=> $address_id,
     		'personal_id'      	=> $request->personalId,
     		'image_path'       	=> 'asd',
     		'adults_in_family' 	=> $request->adultsInFamily,
     		'floor' 			=> $request->floor,
     		'square_meters' 	=> $request->squareMeters
     	]);

     	return redirect('home');
    }
}
