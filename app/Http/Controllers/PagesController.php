<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function home()
	{
		return view('welcome');
	}
    public function login()
    {
    	return view('pages.login');
    }

    public function profile()
    {
    	return view('users.profile');
    }
}
