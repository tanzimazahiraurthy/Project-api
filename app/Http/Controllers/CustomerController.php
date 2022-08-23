<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Bookedroom;
use App\Models\Review;
use App\Models\Gym;
use App\Models\Spa;
use App\Models\Question;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

use Session;

class CustomerController extends Controller
{
    //
    public function  getCustomer(){
        return view('');
    }

    ///new 
    public function addCustomer(){
        return view('customer.addcustomer');
    }

    public function addCustomerSubmit(Request $req){
 
        $this->validate($req,
            [
                'name' => 'required',
                'userName' => 'required',
                'password' => 'required',
                'confirm_password' => 'required',
                'email' => 'required',
                'phoneNumber' => 'required',
                'nidNo' => 'required',
                'address' => 'required',
                'gender' => 'required',
                'age' => 'required'
            ],
            [
                'name.required' => 'Please provide your name',
                'userName.required' => 'Please provide your user name',
                'password.required' => 'Please enter password',
                'confirm_passworde.required' => 'Password did not match!',
                'email.required' => 'Please provide your email',
                'phoneNumber.required' => 'Please provide your contact number',
                'nidNo.required' => 'Please provide your nid number',
                'address.required' => 'Please provide your address',
                'gender.required' => 'Please provide your gender',
                'age.required' => 'Please provide your age'
            ]
        );

        $filename= $req->name.'.'.$req->file('image')->getClientOriginalExtension();
        $req->file('image')->storeAs('/public/image/',$filename);


        $customer = new Customer();
        $customer->name = $req->name;
        $customer->userName = $req->userName;
        $customer->password = md5($req->password);
        $customer->email = $req->email;
        $customer->phoneNumber = $req->phoneNumber;
        $customer->nidNO = $req->nidNo;
        $customer->address = $req->address;
        $customer->gender = $req->gender;
        $customer->age = $req->age;
        $customer->image = "storage/image/".$filename;
        $customer->save();

        return redirect()->route('customer.login.submit');
    }

    public function login(){
        return view('customer.login');
    }

    public function loginsubmit(Request $req){
        $this->validate($req,
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'password'=>'required|min:4',
            ],
            [
                'name.required'=>'Please provide name',
                'password.required'=>'Please provide password',
                'password.min'=>'Atleast 4 characters required'
            ]
        );
        $customer = Customer::where('name', $req->name)->where('password', md5($req->password))->first();
    
        //return $customer;
        if($customer){
            session()->put('logged_name', $customer->name);
            session()->put('logged_password', $customer->password);
            return redirect()->route('customer.panel');
        }

        return redirect()->route('customer.login.submit'); 

    }
///Profile
    public function customerProfile(){
        $name =  Session::get('logged_name');
        $password = Session::get('logged_password');
        $customer = Customer::where('name', $name)->where('password', $password)->first();
        //return $customer;
        return view('customer.profile')->with('customer', $customer);
    }

///Edit profile
    public function customerProfileEdit(Request $req){
        $name =  Session::get('logged_name');
        $password = Session::get('logged_password');
        $customer = Customer::where('name', $name)->first();
        return view('customer.editprofile')->with('customer', $customer);
        //return $room;
    }

    public function customerProfileEditSubmit(Request $req){
        $name =  Session::get('logged_name');
        $customer = Customer::where('name', $name)->first();
        $customer->name = $req->name;
        $customer->userName = $req->userName;
        $customer->email = $req->email;
        $customer->phoneNumber = $req->phoneNumber;
        $customer->nidNo = $req->nidNo;
        $customer->address = $req->address;
        $customer->age = $req->age;
        $customer->save();

        return redirect ()->route ('customer.profile');
    }


    public function customerPanel(){
        return view('customer.customerpanel');
    }

    public function cusotmerLogout(){
        session::flush();
        return redirect()->route('customer.login.submit');
    }

    public function customerRoomBook(){
        return view('customer.roombook');
    }

    public function customerRoomBookSubmit(Request $req){
        
        $room = new Bookedroom();
        $room->RoomNo = $req->RoomNo;
        $room->Branch = $req->Branch;
        $room->NID = $req->NID;
        $room->Address = $req->Address;
        $room->Email = $req->Email;
        $room->Phone = $req->Phone;
        $room->CIT = $req->CIT;
        $room->COT = $req->COT; 
        $room->save();

        return redirect()->route('customer.room.book.list');
    }

    public function customerRoomBookList(Request $req){
        $room = Bookedroom::all();
        return view('customer.roombooklist')->with('room', $room);
    }

    public function customerRoomBookDelete(Request $req){
        $id = $req->id;
        $room = Bookedroom::where('id', $id)->delete();
        return redirect ()->route ('customer.room.book.list');
    }

    public function customerRoomBookEdit(Request $req){
        $room = Bookedroom::where('id', $req->id)->first();
        return view('customer.editroombook')->with('room', $room);
        //return $room;
    }

    public function customerRoomBookEditSubmit(Request $req){
        $room = Bookedroom::where('id', $req->id)->first();
        $room->RoomNo = $req->RoomNo;
        $room->Branch = $req->Branch;
        $room->NID = $req->NID;
        $room->Address = $req->Address;
        $room->Email = $req->Email;
        $room->Phone = $req->Phone;
        $room->CIT = $req->CIT;
        $room->COT = $req->COT; 
        $room->save();

        return redirect ()->route ('customer.room.book.list');
    }



  ///review
    public function customerReview(){
        return view('customer.review');
    }

    public function customerReviewSubmit(Request $req){
        
        $review = new Review();
        $review->Name = $req->Name;
        $review->Email = $req->Email;
        $review->Subject = $req->Subject;
        $review->Message = $req->Message;
        $review->Rating = $req->Rating; 
        $review->save();

        return redirect()->route('customer.review.list');
    }

    public function customerReviewList(Request $req){
        $review = Review::all();
        return view('customer.reviewlist')->with('review', $review);
    }

///Room categories
    public function rooms(){
        return view('customer.rooms');
    }

 ///Gym Reserve
    public function addGym(){
        return view('customer.gym');
    }
    public function addGymSubmit(Request $req){
        $gym = new Gym();
        $gym->schedule = $req->schedule; 
        $gym->save();
        //return $gym;
        return redirect()->route('customer.gym.list');
    }

    public function gymList(){
        $gym = Gym::all();
        return view('customer.gymlist')->with('gym', $gym);
    }


    public function customerGymEdit(Request $req){
        $gym = Gym::where('id', $req->id)->first();
        return view('customer.editgym')->with('gym', $gym);
        //return $room;
    }

    public function customerGymEditSubmit(Request $req){
        $gym = Gym::where('id', $req->id)->first();
        $gym->schedule = $req->schedule; 
        $gym->save();

        return redirect ()->route ('customer.gym.list');
    }

    public function customerGymDelete(Request $req){
        $id = $req->id;
        $gym = Gym::where('id', $id)->delete();
        return redirect ()->route ('customer.gym.list');

    }



///Spa Reserve
public function addSpa(){
    return view('customer.spa');
}
public function addSpaSubmit(Request $req){
    $spa = new Spa();
    $spa->schedule = $req->schedule; 
    $spa->save();
    //return $gym;
    return redirect()->route('customer.spa.list');
}

public function spaList(){
    $spa = Spa::all();
    return view('customer.spalist')->with('spa', $spa);
}


public function customerSpaEdit(Request $req){
    $spa = Spa::where('id', $req->id)->first();
    return view('customer.editspa')->with('spa', $spa);
    //return $room;
}

public function customerSpaEditSubmit(Request $req){
    $spa = Spa::where('id', $req->id)->first();
    $spa->schedule = $req->schedule; 
    $spa->save();

    return redirect ()->route ('customer.spa.list');
}

public function customerSpaDelete(Request $req){
    $id = $req->id;
    $spa = Spa::where('id', $id)->delete();
    return redirect ()->route ('customer.spa.list');

}

///Food Order
public function orderFood(){
    return view('customer.orderfood');
}

///Question
public function customerQues(){
    return view('customer.ques');
}

public function customerQuesSubmit(Request $req){
    
    $ques = new Question();
    $ques->userName = $req->userName;
    $ques->question = $req->question;
    $ques->save();

    return redirect()->route('customer.ques.list');
}

public function customerQuesList(Request $req){
    $ques = Question::all();
    return view('customer.queslist')->with('ques', $ques);
}

///Mail Send
    public function mailSend(){
        $e_sub = "Successfully Send Mail";
        $e_body = "NAME: SHAFIUR RAHMAN\nID:19-40770-2";
        Mail::to('hasanmahmudul2457@gmail.com')->send(new SendMail($e_sub, $e_body));
    }

}