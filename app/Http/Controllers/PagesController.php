<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rosterevent;
use Auth;
use Response;
use Log;

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

    public function myevents()
    {
        return view('users.events.myevents');
    }
    public function settings()
    {
        return view('users.settings');
    }

    public function getUserEvents()
    {
        if(Auth::check())
        {
            // dd();
            return response()->json(['events' => Auth::user()->events()->with('Attachments')->get()]);
        }
        else 
            return Response::json(array('events'=>''));
    }
    public function getAttachmentsForEvent($eventID)
    {
        if(Auth::check())
        {

            $attachments = Auth::user()->events()->where('id',$eventID)->first()->attachments();
            // dd($attachments->get());
            
            if((empty($attachments) || is_null($attachments)) && !isset($attachments))
                return response()->json(['attachments','']);
            else
            {
                return response()->json(['attachments' => $attachments->get()]);
            };
        }
        else 
            return Response::json(array('events'=>''));
    }

}
