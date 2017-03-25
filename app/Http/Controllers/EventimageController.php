<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventimage;
use App\Event;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use \Input as Input;
use Auth;

class EventimageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $event_image = new Eventimage;

        if(Input::hasFile('event_image')){
          $event_image_file = Input::file('event_image');
          $event_image_name = $event_image_file->getClientOriginalName();
          $event_image_file->move('africapievents', $event_image_name); 
          $event_image->image_name = $event_image_name;         
        }
        $event_image->event_id = $request['event_id'];
        $event_image->description = $request['description'];
        $event_image->user_id = Auth::user()->id;

        $event_image->save();


        return redirect()->route('adminevents');
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
        $event = Event::find($id);

        return view('events.event_images',['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
