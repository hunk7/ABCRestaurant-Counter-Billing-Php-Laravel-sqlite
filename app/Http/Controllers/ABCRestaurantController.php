<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ABCRestaurantController extends Controller
{
     public function index($user)
    {
    	$user = User::findOrfail($user);
        return view('home',[
        	'user'=> $user,
        ]);
    }
}
