<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manager;
use App\Models\Category;
use App\Models\Room;
use App\Models\Notice;
use Illuminate\Support\Facades\Validator;

use Session;

class ManagerController extends Controller
{
    public function login(){
        return view('/manager/login');
    }
    
    public function loginsubmit(Request $req)
    {
        $validator = Validator::make($req->all(),
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
        if($validator->fails()){
            return response()->json(["status"=>422, "msg"=>"Input values are not correct!"]);
        }

        $manager = manager::where('username', $req->username)->where('password', $req->password)->first();
        
        if($manager){
            return response()->json(["status"=>200, "msg"=>"Successfully login"]);
        }
        return response()->json(["status"=>422, "msg"=>"Invalid Username or Password!"]);
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

    public function editCategoryInfo($id){
        $data = Category::where('id', $id)->first();
        return response()->json($data);
    }

    public function editCategorySubmit(Request $req)
    {
        $validator = Validator::make($req->all(),
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

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $category = Category::where('id', $req->id)->first();
        $category->name = $req->name;
        $category->price = $req->price;
        $category->qty = $req->qty;
        $category->description = $req->description;
        $category->save();
        return response()->json(["msg"=>"Category updated"]);
    }

    public function addCategorySubmit(Request $req)
    {
        $validator = Validator::make($req->all(),
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

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $category = new Category();
        $category->name = $req->name;
        $category->price = $req->price;
        $category->qty = $req->qty;
        $category->description = $req->description;
        $category->save();
        return response()->json(["msg"=>"Category added"]);
    }



    public function categoryList()
    {
        $categorylist = Category::all();

        return response()->json($categorylist);
       
    } 

    public function deleteCategory($id)
    {
        $res = Category::where('id', $id)->delete();
        if($res){
            return  response()->json(["status"=>200, "msg"=>"Category Deleted"]);
        }
        return  response()->json(["status"=>404, "msg"=>"Not found"]);
       
    } 


    public function addRooms(Request $req)
    {
        $validator = Validator::make($req->all(),
            [
                'room_no' => 'required',
                'c_id' => 'required',
            ],
            [
                'room_no.required' => 'Please provide room number',
                'c_id.required' => 'Please provide category name'
            ]
        );
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $rooms = new Room();
        $rooms->room_no = $req->room_no;
        $rooms->c_id = $req->c_id;
        $rooms->save();

        return response()->json(["msg"=>"Room added Successfully"]);
    } 

    public function roomsList()
    {
        $roomslist = Room::all();
        return response()->json($roomslist);
    }  

    public function deleteRoom($id)
    {
        $res = Room::where('id', $id)->delete();
        if($res){
            return  response()->json(["status"=>200, "msg"=>"Category Deleted"]);
        }
        return  response()->json(["status"=>404, "msg"=>"Not found"]);
       
    } 

    public function editRoomInfo($id){
        $data = Room::where('id', $id)->first();
        return response()->json($data);
    }

    public function editRoomSubmit(Request $req)
    {
        $validator = Validator::make($req->all(),
            [
                'room_no' => 'required',
                'c_id' => 'required',
            ],
            [
                'room_no.required' => 'Please provide room number',
                'c_id.required' => 'Please provide category name'
            ]
        );

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $data = Room::where('id', $req->id)->first();
        $data->room_no = $req->room_no;
        $data->c_id = $req->c_id;
        $data->save();
        return response()->json(["msg"=>"Room Updated"]);
    }
    


    
    public function addNotice(Request $req)
    {
        $validator = Validator::make($req->all(),
            [
                'notice' => 'required',
                
                
            ],
            [
                'notice.required' => 'Please provide notices',
                
                
            ]
        );
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $data = new Notice();
        $data->notice = $req->notice;
        $data->save();

        return response()->json(["msg"=>"Room added Successfully"]);
    } 

    public function noticeList()
    {
        $roomslist = Notice::all();
        return response()->json($roomslist);
    }  

    public function deleteNotice($id)
    {
        $res = Notice::where('id', $id)->delete();
        if($res){
            return  response()->json(["status"=>200, "msg"=>"Category Deleted"]);
        }
        return  response()->json(["status"=>404, "msg"=>"Not found"]);
       
    } 

    public function editNoticeInfo($id){
        $data = Notice::where('id', $id)->first();
        return response()->json($data);
    }

    public function editNoticeSubmit(Request $req)
    {
        $validator = Validator::make($req->all(),
            [
                'notice' => 'required',
                
                
            ],
            [
                'notice.required' => 'Please provide notices',
                
                
            ]
        );

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $data = Notice::where('id', $req->id)->first();
        $data->notice = $req->notice;
        
        $data->save();
        return response()->json(["msg"=>"Room Updated"]);
    }
}
