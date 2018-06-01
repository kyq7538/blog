<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    public function index(){
    	// $user=Auth::user();
    	// dd($user);
    	return view('user.index');
    }
}
