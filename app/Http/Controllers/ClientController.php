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
    	$name = auth()->user()->name;
    	return $name;
    }

    public function userinfo()
    {
    	$user_id = auth()->user()->id;
    	$user = User::find($user_id);

    	return view('userinfo', ['user' => $user]);
     }

     public function addressinfo()
     {
     	$address = User::find(auth()->user()->id)->getAddress();

     	return view('addressinfo', ['address' => $address]);
     }
}
