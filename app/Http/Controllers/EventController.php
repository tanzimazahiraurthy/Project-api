<?php



namespace App\Http\Controllers;



use App\Models\Event;

use Illuminate\Http\Request;



class EventController extends Controller

{

    ///Add Event

    public function Event(){

        return view('customer.event');

    }



    public function EventSubmit(Request $req){

       

        $event = new Event();

        $event->name = $req->name;

        $event->description = $req->description;

        $event->time = $req->time;

        $event->avl = $req->avl;

        $event->save();



        return redirect()->route('customer.event.list');

    }



    public function EventList(Request $req){

        $event = Event::all();

        return view('customer.eventlist')->with('event', $event);

    }



}