<?php



namespace App\Http\Controllers;



use App\Models\Event;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;



class EventController extends Controller

{

    ///Add Event

    public function Event(){

        return view('customer.event');

    }



    public function EventSubmit(Request $req){

        $validator = Validator::make($req->all(),
            [
                'name'=>'required',
                'description'=>'required',
                'time'=>'required',
                'avl'=>'required'
            ],
            [
                'avl.required'=>"This field is required."
            ]
        );
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $event = new Event();
        $event->name = $req->name;
        $event->description = $req->description;
        $event->time = $req->time;
        $event->avl = $req->avl;
        $event->save();

        return response()->json(["msg"=>"Event added"]);

    }



    public function EventList(Request $req){

        $event = Event::all();
        return response()->json($event);

    }

    public function deleteEvent($id)
    {
        $res = Event::where('id', $id)->delete();
        if($res){
            return  response()->json(["status"=>200, "msg"=>"Event Deleted"]);
        }
        return  response()->json(["status"=>404, "msg"=>"Not found"]);
       
    } 

    public function editEventInfo($id){
        $data = Event::where('id', $id)->first();
        return response()->json($data);
    }

    public function editEventSubmit(Request $req)
    {
        $validator = Validator::make($req->all(),
            [
                'name'=>'required',
                'description'=>'required',
                'time'=>'required',
                'avl'=>'required'
            ],
            [
                'avl.required'=>"This field is required."
            ]
        );

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $category = Event::where('id', $req->id)->first();
        $category->name = $req->name;
        $category->description = $req->description;
        $category->time = $req->time;
        $category->avl = $req->avl;
        $category->save();
        return response()->json(["msg"=>"Event Updated"]);
    }



}