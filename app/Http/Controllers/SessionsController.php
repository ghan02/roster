<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Auth;
use Log;

class SessionsController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $attempt = Auth::attempt([
            'email' => $username,
            'password' => $password
        ]);

        if($attempt)
            return Response::json(array('message' => 'You have logged in successfully!','type'=>'success' , 'url' => '/profile'));
        else 
            return Response::json(array('message' => 'Username or password is incorrect!', 'type'=>'error'));

            
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}