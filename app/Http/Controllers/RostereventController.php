<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rosterevent;
use Auth;
use App\Eventtype;
use Response;
use Log;
use App\Attachment;

class RostereventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventtypes = Eventtype::lists('title','id');
        return view('users.events.create')->with('eventtypes',$eventtypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $event = new Rosterevent;
        $event->fill($request->all());
        $event->user_id = Auth::user()->id;
        $event->isapproved = 0;
        if($request->has('isalldayevent'))
            $event->isalldayevent = 1 ;
        else 
            $event->isalldayevent = 0;

        if($request->has('isteamevent'))
            $event->isteamevent = 1 ;
        else 
            $event->isteamevent = 0;

        $event->save();
        dd('request was saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $event = Rosterevent::find($id);
        if($event->isapproved)
            return Response::json(array('message' => 'You cannot edit this record because this has been approved','type'=>'error' ));


        if($event->user_id != Auth::user()->id)
            dd('this is not your event');
        $eventtypes = Eventtype::lists('title','id');
        
        return view('users.events.edit')->withEvent($event)->with('eventtypes',$eventtypes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Log::info($request->all());
        $event = Rosterevent::find($id);
        
        if($event->user_id != Auth::user()->id)
            dd('this is not your event');

        if($event->isapproved == 1)
            dd('this cannot be updated , because your manager has already approved this request.');


        $event->fill($request->all());
        $event->user_id = Auth::user()->id;
        $event->isapproved = 0;
        if($request->has('isalldayevent'))
            $event->isalldayevent = 1 ;
        else 
            $event->isalldayevent = 0;

        if($request->has('isteamevent'))
            $event->isteamevent = 1 ;
        else 
            $event->isteamevent = 0;
        $event->save();
        dd('request was saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadFile(Request $request, $id) 
    {
       $this->validate($request,[
            'file' =>'required|mimes:jpg,jpeg,png,bmp,doc,docx,pdf,ppt,pptx'
        ]);
       $event = Rosterevent::findOrFail($id);

       // user should not be allowed to upload files to an event that is not his/her and/or is not a team 
       // event.


       if($event->user_id !== Auth::user()->id && !$event->isteamevent)
            return $resonse()->json('You are not an owner of this event id and this is not a team event. Hence the file was not uploaded');
        
       $file = $request->file('file');
       $directoryName = 'events/uploads/'.time().'/';
       $name = time().$file->getClientOriginalName();
       $file->move($directoryName, $name);
       $attachment = new Attachment;
       $attachment->filename= $file->getClientOriginalName();
       $attachment->location = $directoryName.$name;
       $attachment->save();
       $event->attachments()->save($attachment);

    }
}
