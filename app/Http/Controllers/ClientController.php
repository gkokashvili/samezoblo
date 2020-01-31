<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tax;
use App\Address;

class ClientController extends Controller
{
    public function index($name)
    {
    	$user_id = auth()->user()->id;
        $user = User::find($user_id);
        $address = Address::find($user->getAddress()->id);

    	return view('panel', ['user' => $user, 'address' => $address]);
    }

    public function userinfo()
    {
    	$user_id = auth()->user()->id;
    	$user = User::find($user_id);

    	return view('userinfo', ['user' => $user]);
     }

     public function addressinfo()
     {
     	$user_id = auth()->user()->id;
        $user = User::find($user_id);
        $address = Address::find($user->getAddress()->id);

     	return view('addressinfo', ['address' => $address]);
     }
}
