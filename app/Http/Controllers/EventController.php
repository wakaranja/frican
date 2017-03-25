<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use \Input as Input;
use Carbon\Carbon;
use App\Eventsubscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventRegistered;
use App\Mailinglist;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::orderBy('created_at','desc')->paginate(10);

        $upcoming = Event::where('date','>',Carbon::today())->orderBy('date','asc')->get();
        $past = Event::where('date','<',Carbon::today())->orderBy('date','asc')->get();
        $today = Event::where('date','=',Carbon::today())->orderBy('date','asc')->get();

        return view('events.events',['events'=>$events,'upcoming'=>$upcoming,'past'=>$past,'today'=>$today]);
    }

    public function pastevents()
    {
        //
        $events = Event::orderBy('created_at','desc')->paginate(10);

        $upcoming = Event::where('date','>',Carbon::today())->orderBy('date','asc')->get();
        $past = Event::where('date','<',Carbon::today())->orderBy('date','asc')->get();
        $today = Event::where('date','=',Carbon::today())->orderBy('date','asc')->get();

        return view('events.pastevents',['events'=>$events,'upcoming'=>$upcoming,'past'=>$past,'today'=>$today]);
    }

    public function allevents()
    {
        //
        $events = Event::orderBy('created_at','desc')->paginate(10);

        $upcoming = Event::where('date','>',Carbon::today())->orderBy('date','asc')->get();
        $past = Event::where('date','<',Carbon::today())->orderBy('date','asc')->get();
        $today = Event::where('date','=',Carbon::today())->orderBy('date','asc')->get();

        return view('events.allevents',['events'=>$events,'upcoming'=>$upcoming,'past'=>$past,'today'=>$today]);
    }

    public function adminevents()
    {
        //
        $events = Event::orderBy('created_at','desc')->paginate(10);

        $upcoming = Event::where('date','>',Carbon::today())->orderBy('date','asc')->get();
        $past = Event::where('date','<',Carbon::today())->orderBy('date','asc')->get();
        $today = Event::where('date','=',Carbon::today())->orderBy('date','asc')->get();

        return view('events.adminevents',['events'=>$events,'upcoming'=>$upcoming,'past'=>$past,'today'=>$today]);
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
        $this->validate($request,[
          'name'=>'required',
          'date'=>'required',
          'from'=>'required',
          'to'=>'required',
          'venue'=>'required',
        ]);
        $event = new Event;

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $image_link = $file->getClientOriginalName();
          $file->move('myevents', $image_link);
          $event->image = $image_link;
        }

        $event->created_by = Auth::user()->id;
        $event->name = $request['name'];
        $event->date = $request['date'];
        $event->from = $request['from'];
        $event->to = $request['to'];
        $event->venue = $request['venue'];
        $event->location = $request['location'];
        $event->ticket = $request['ticket'];
        $event->ticket_details = $request['ticket_details'];
        $event->organizer = $request['organizer'];
        $event->description = $request['description'];

        $event->save();

        return redirect()->route('dashboard');
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
        //Retrieve post by the id passed
        $event = Event::where('id',$id)->first();
        return view('events.event',['event'=>$event]);
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
        $event = Event::find($id);

        return view('events.editevent',['event'=>$event]);
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
        // $this->validate($request,[
        //   'name'=>'required',
        //   'date'=>'required',
        //   'from'=>'required',
        //   'to'=>'required',
        //   'venue'=>'required',
        // ]);
        $event = Event::find($id);

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $image_link = $file->getClientOriginalName();
          $file->move('myevents', $image_link);
          $event->image = $image_link;
        }

        $event->created_by = Auth::user()->id;
        $event->name = $request['name'];
        if($request->has('date')){
          $event->date = $request['date'];
        }
        if($request->has('from')){
          $event->from = $request['from'];
        }
        if($request->has('to')){
          $event->to = $request['to'];
        }

        $event->venue = $request['venue'];
        $event->location = $request['location'];
        $event->ticket = $request['ticket'];
        $event->ticket_details = $request['ticket_details'];
        $event->organizer = $request['organizer'];
        $event->description = $request['description'];

        $event->update();

        return redirect()->route('events');
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
        Event::find($id)->delete();

        return back();
    }

    public function upcomingEvents()
    {
      //check which events are dated dates more than today.
      $upcoming = Event::where('date','>',Carbon::now())->orderBy('date','asc')->get();
      $past = Event::where('date','<',Carbon::now())->orderBy('date','asc')->get();
      $today = Event::where('date','=',Carbon::now())->orderBy('date','asc')->get();

    }

    public function eventsubscribe(Request $request, $id){



      $eventsubscriber = new Eventsubscriber;

      $eventsubscriber->first_name = $request['first_name'];
      $eventsubscriber->last_name = $request['last_name'];
      $eventsubscriber->email = $request['email'];
      $eventsubscriber->event_id = $id;

      $eventsubscriber->save();

      if( is_null($request['subscription']) )
      {

      }
      else
      {
        $mailinglist = new Mailinglist;
        $mailinglist->first_name = $request['first_name'];
        $mailinglist->last_name = $request['last_name'];
        $mailinglist->email = $request['email'];
        $mailinglist->save();

        Mail::to($request->email)->send(new EventRegistered);
      }

      return redirect()->route('event',['id'=>$id]);

    }

    public function eventregistered($id)
    {
      // $eventregistered = Eventsubscriber::where('event_id',$id)->orderBy('created_at','desc')->paginate(10);
      $eventregistered = Event::find($id);
      return view('events.eventregistered',['eventregistered'=>$eventregistered]);
    }
}
