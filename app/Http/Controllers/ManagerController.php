<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manager;
use App\Models\Category;
use App\Models\Room;
use App\Models\Notice;

use Session;

class ManagerController extends Controller
{
    public function login(){
        return view('/manager/login');
    }
    
    public function loginsubmit(Request $req)
    {
        $this->validate($req,
            [
                'username'=>'required|regex:/^[A-Z a-z]+$/',
                'password'=>'required|min:4',
            ],
            [
                'username.required'=>'Please provide name',
                'password.required'=>'Please provide password',
                'password.min'=>'Atleast 4 characters required'
            ]
        );
        $manager = manager::where('username', $req->username)->where('password', $req->password)->first();
        
        if($manager){
            session()->put('logged_name', $manager->name);
            session()->put('logged_username', $manager->username);
            session()->put('logged_password', $manager->password);
            return redirect()->route('manager.panel');
        }

        return redirect()->route('manager.login.submit');
    }

    public function managerDashboard(){
        return view('/manager/managerdashboard');
    }

    public function logout()
    {
        session::flush();
        return redirect()->route('manager.login.submit');
    }

    // public function addCategory(){
    //     return view('/manager/addcategory');
    // } 

    public function addCategory(Request $req)
    {
        // $this->validate($req,
        //     [
        //         'name' => 'required',
        //         'price' => 'required',
        //         'qty' => 'required',
        //         'description' => 'required',
        //     ],
        //     [
        //         'name.required' => 'Please provide category name',
        //         'price.required' => 'Please provide category price',
        //         'qty.required' => 'Please provide the number of bed',
        //         'description.required' => 'Please provide category description',
        //     ]
        // );

        $category = new Category();
        $category->name = $req->name;
        $category->price = $req->price;
        $category->qty = $req->qty;
        $category->description = $req->description;
        if($category->save()){
            return response()->json(["msg"=>"Added Successfully"]);
        }
        return response()->json(["msg"=>"Unsuccessfull"]);
        //return redirect()->route('manager.panel');
        
    }

    public function addCategorySubmit(Request $req)
    {
        $this->validate($req,
            [
                'name' => 'required',
                'price' => 'required',
                'qty' => 'required',
                'description' => 'required',
            ],
            [
                'name.required' => 'Please provide category name',
                'price.required' => 'Please provide category price',
                'qty.required' => 'Please provide the number of bed',
                'description.required' => 'Please provide category description',
            ]
        );

        $category = new Category();
        $category->name = $req->name;
        $category->price = $req->price;
        $category->qty = $req->qty;
        $category->description = $req->description;
        $category->save();
        return redirect()->route('manager.panel');
    }

    public function categoryList(Request $req)
    {
        $categorylist = Category::all();
       //return view('/manager/allcategories')->with('categories', $categorylist); 
       return $categorylist;
       
    } 

    //  public function addRooms(){
    //     return view('/manager/addrooms');
    //  } 

    public function addRooms(Request $req)
    {
        // $this->validate($req,
        //     [
        //         'room_no' => 'required',
        //         'c_id' => 'required',
                
        //     ],
        //     [
        //         'room_no.required' => 'Please provide room number',
        //         'c_id.required' => 'Please provide c id',
                
        //     ]
        // );

        $rooms = new Room();
        $rooms->room_no = $req->room_no;
        $rooms->c_id = $req->c_id;
        if($rooms->save()){
            return response()->json(["msg"=>"Added Successfully"]);
        }
        return response()->json(["msg"=>"Unsuccessfull"]);
       // return redirect()->route('manager.panel'); 
    } 



    public function addRoomsSubmit(Request $req)
    {
        $this->validate($req,
            [
                'room_no' => 'required',
                'c_id' => 'required',
                
            ],
            [
                'room_no.required' => 'Please provide room number',
                'c_id.required' => 'Please provide c id',
                
            ]
        );

        $rooms = new Room();
        $rooms->room_no = $req->room_no;
        $rooms->c_id = $req->c_id;
        $rooms->save();
        return redirect()->route('manager.panel');
    } 
    
    public function roomsList(Request $req)
    {
        $roomslist = Room::all();
       // return view('/manager/allrooms')->with('rooms', $roomslist);
       return $roomslist;
    }  

    // public function addnotice(){
    //     return view('/manager/addnotice');
    // } 


    public function addNotice(Request $req)
    {
        $this->validate($req,
            [
                'notice' => 'required',
                
                
            ],
            [
                'notice.required' => 'Please provide notices',
                
                
            ]
        );

        $notice = new Notice();
        $notice->notice = $req->notice;
        
        if($notice->save()){
            return response()->json(["msg"=>"Added Successfully"]);
        }
        return response()->json(["msg"=>"Unsuccessfull"]);
        //return redirect()->route('manager.panel');
    } 
    

    public function addNoticeSubmit(Request $req)
    {
        $this->validate($req,
            [
                'notice' => 'required',
                
                
            ],
            [
                'notice.required' => 'Please provide notices',
                
                
            ]
        );

        $notice = new Notice();
        $notice->notice = $req->notice;
        
        $notice->save();
        return redirect()->route('manager.panel');
    } 

}
