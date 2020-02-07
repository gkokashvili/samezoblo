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
    	return view('guest');
    }

    public function create(Request $request)
    {
        $addressName;
        $addressNumber;
        if($request)
        {
            $addressName = $request->name;
            $addressNumber = $request->number;
        }
    	return view('create', ['addressName' => $addressName, 'addressNumber' => $addressNumber]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'streetName' => 'required|max:255',
        'streetNumber' => 'required',
        'name'  => 'required',
        'surname' => 'required',
        'email' => 'required|E-mail|unique:users,email',
        'password' => 'required|confirmed',
        'personalId' => 'required|unique:users,personal_id|numeric',
        'childsInFamily' => 'numeric',
        'adultsInFamily' => 'numeric',
        'floor' => 'required',
        'squareMeters' => 'required|numeric',
        'homeNumber'  => 'required|numeric'
        ]);

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
            'surname'           => $request->surname,
     		'email' 		   	=> $request->email,
     		'password'         	=> bcrypt($request->password),
     		'address_id'       	=> $address_id,
     		'personal_id'      	=> $request->personalId,
     		'image_path'       	=> 'asd',
     		'adults_in_family' 	=> $request->adultsInFamily,
            'childs_in_family'  => $request->childsInFamily,
            'home_number'       => $request->homeNumber,
     		'floor' 			=> $request->floor,
            'home_number'       => $request->homeNumber,
     		'square_meters' 	=> $request->squareMeters
     	]);

     	return redirect('home');
    }

    public function search(Request $request)
    {
        $addresses = Address::where('name', 'LIKE', "%{$request->addressname}%")->get();
        return view('search', ['addresses' => $addresses]);
    }
}
