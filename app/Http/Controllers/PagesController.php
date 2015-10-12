<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rosterevent;
use Auth;
use Response;
use Log;
use DB;
use App\Team;
use App\User;

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
    public function password()
    {
        return view('users.password');
    }

    public function getUserEvents()
    {
        if(Auth::check())
        {
            return response()->json(['events' => Auth::user()->events()->where('isapproved',0)->with('Attachments')->with('Links')->get()]);
        }
        else 
            return Response::json(array('events'=>''));
    }

    public function getApprovedUserEvents()
    {
        if(Auth::check())
        {
            return response()->json(['events' => Auth::user()->events()->where('isapproved',1)->with('Attachments')->with('Links')->get()]);
        }
        else 
            return Response::json(array('events' =>''));

    }

    public function downloadfile($file)
    {
       $file= public_path(). $file;
       return Response::download($file);
    }

    public function rosterevents()
    {
        $events = DB::table('events')
            ->join('users', 'user_id', '=', 'events.user_id')
            ->select('events.id','events.title','events.startdate as start','events.enddate as end','events.color','events.textColor')->distinct()
            ->get();

        return response()->json($events);
    }

    public function searchevents($searchterm,$myevents)
    {

        if($myevents == 'true')
        {
            if(!Auth::check())
            {
                return Response::json(array('message' => 'You must be logged in to search for your events!','type'=>'error' ));
            }
            $events = DB::table('events')
                ->join('users', 'user_id', '=', 'events.user_id')
                ->select('events.id','events.title','events.startdate as start','events.enddate as end','events.color','events.textColor','users.name as name')
                ->where('title','LIKE','%'.$searchterm.'%')
                ->where('events.user_id','=',Auth::user()->id)
                ->get();
        }
        else
        {
            $events = DB::table('events')
                    ->join('users', 'user_id', '=', 'events.user_id')
                    ->select('events.id','events.title','events.startdate as start','events.enddate as end','events.color','events.textColor','users.name as name')
                    ->where('title','LIKE','%'.$searchterm.'%')
                    ->get();
        }
        return response()->json($events);
    }

    public function showEvent($eventID)
    {
        $event = Rosterevent::find($eventID);
        return view('events.show')->with('event',$event);
    }

    public function getTeams()
    {
        $teams = Team::latest()->with('users')->get();
        return response()->json(['teams'=>$teams]);
    }
    public function getUsers()
    {
        $users = User::latest()->with('teams')->get();
        return response()->json(['users'=>$users]);
    }
}
