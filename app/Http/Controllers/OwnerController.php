<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\signupmail;
use App\appointmentCharges;
use Session;
use App\admin;
use App\appointment;
use App\add_product;
use App\men_services;
use App\women_services;
use App\cart;
use App\order;
use App\conform_order;
use App\Feedback;
use App\Feedback_Data;
use App\promotion;
use App\Mail\MainController;
use App\owner;
use App\notfClint;
use App\notfOwner;
use App\notfDetailClint;
use App\notfDetailOwner;
use Crypt;
class OwnerController extends Controller
{
    public function login()
    {
    	return view('owner.owner-login');
    }

    public function validatelogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'pass' => 'required',
        ]);
        $userName="";
        $email= $request->email;
        $pass= $request->pass;

        $obj = new owner;
        $user=$obj::where('email', $email)->where('password',$pass)->get();
        foreach($user as $row)
       {
           $userEmail=$row->email;
           $userName=$row->Salon_name;
           $id=$row->id;
           $phone=$row->phone_no;
           $img = $row->img;
       }
        if($userName != "")
        {
            $unread="none";
                    $read="none";
                    $notf = new notfOwner;
                    $temp=$notf::where('ownerId', $id)->get();
                    // Getting Notifications
                    foreach($temp as $data)
                     {
                         $unread=$data->unread;
                         $read=$data->read;  
                     }
                    //   if there is no record
                     if($unread==="none")
                     {
                        $notf->ownerId=$id;
                        $notf->unread=0;
                        $notf->read=0;
                        $notf->save();
                        $unread = 0;
                     }
            session(['user'=>'owner','id'=> $id,'email'=>$userEmail,'name'=>$userName,]);
            session(['noft'=>$unread]);
            return redirect('/owner_panel')->with('message', $userName.'! You are Logged in Successfully!');         
        }
        else
        {
            $error=true;
            return redirect('/OwnerLogin')->with('message','404');
        }
    }
     public function panel(){
        $user = Session::get('user');
        $id = Session::get('id');

        $adm = new owner;
        $info = $adm::where('id',$id)->first();

        return view('owner.owner',compact('info'));
    }

    public function owner_services_view($id)
    {
        $menServices = men_services::where('userId',$id)->get();
        $womenServices = women_services::where('userId',$id)->get();
        return view('owner.ownerServiceView')->with('menServices',$menServices)->with('womenServices',$womenServices);
    }

    public function M_S_add_by_owner($id, Request $request){

        $obj = new men_services;
        $name = $request->name;
        $price = $request->price;
        $category = $request->category;
        if ($request->hasfile('pic')) {
            $file = $request->file('pic');
            $extension = $file->getclientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/men_services/',$filename);
            $obj->img = $filename;
        }
        else 
        {
            return $request;
            $obj->img = '';
        }

        $obj->userId= $id;
        $obj->name = $name;
        $obj->price = $price;
        $obj->category = $category;
        

        $obj->save();

        return redirect()->back()->with('message', $name.'! Service add Successfully!');

    }

     public function W_S_add_by_owner($id, Request $request)
     {
        $obj = new women_services;
        $name = $request->name;
        $price = $request->price;
        $category = $request->category;
        if ($request->hasfile('img')) {
            $file = $request->file('img');
            $extension = $file->getclientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/women_services/',$filename);
            $obj->img = $filename;
        }
        else 
        {
            return $request;
            $obj->img = '';
        }
        
        $obj->userId= $id;
        $obj->name = $name;
        $obj->price = $price;
        $obj->category = $category;
        

        $obj->save();

        return redirect()->back()->with('message', $name.'! Service add Successfully!');

    }

    public function OwnerPAppointments($name)
    {
        $appointments = appointment::where('salonName',$name)->get();
        return view('owner.pendingAppontments')->with('appointments',$appointments);
    }

    public function OwnerAAppointments($name)
    {
        $appointments = appointment::where('salonName',$name)->get();
        return view('owner.AcceptedAppointment')->with('appointments',$appointments);
    }

         public function acceptAppointment(Request $req)
    {
                $ownerName = Session::get('name');
                $ownerId = Session::get('id');
                $id=$req->id;
                $appointment= new appointment;
                $newStatus="Accepted";   
                $Cust = "";

        //===== Change Status
                appointment::where('a_id', $id)
                ->update([
                'status' => $newStatus ]);
        //=======Get Customer id
                    $appointment = appointment::get()->where('a_id', $id);

                    foreach($appointment as $row){
                        $Cust=$row->admin_id;       //User id agai
                                          
                    
                    }
         // Adding Charges to user cart ===============
                  
                    $charges = new appointmentCharges;

                    $charges->userId=$Cust;
                    $charges->bookingId=$id;
                    $charges->charges=200;
                    $charges->status="unpaid";
                    $charges->save();

                    

                // to set Notifications
                $notf = new notfDetailClint;
                $notf->userId= $Cust;
                $noft->ownerId = $ownerId;
                $noft->msg="Request For Appointment To {{$ownerName}} Has Been Accpeted";
                $noft->status="unread";
                $noft->save();
                //set noft no for clint
                $totalNotf = notfClint::get()->where('clintId', $Cust);
                foreach($totalNotf as $row){
                    $unread=$row->unread;
                }
                $unread=$unread+1;
                notfClint::where('clintId', $Cust)
                ->update([
                'unread' => $unread]);




        return redirect()->back()->with('message', 'Accepted Successfully! A notification is sent to the user');
        
    }

    public function rejectAppointment(Request $req)
    {
                $id=$req->id;
                $appointment= new appointment;
                $newStatus="Rejected";   
                $Cust = "";

        //===== Change Status
                appointment::where('a_id', $id)
                ->update([
                'status' => $newStatus ]);
        //=======Get Customer id
                    $appointment = appointment::get()->where('a_id', $id);

                    foreach($appointment as $row){
                        $Cust=$row->admin_id;       //User id   
                    }
         // Adding Charges to user cart ==============
                    $charges = new appointmentCharges;
                    $charges->userId=$Cust;
                    $charges->bookingId=$id;
                    $charges->charges=200;
                    $charges->status="unpaid";
                    $charges->save();  

                    // to set Notifications
                $notf = new notfDetailClint;
                $notf->userId= $Cust;
                $noft->ownerId = $ownerId;
                $noft->msg="Request For Appointment To {{$ownerName}} Has Been Rejected. Please Try Some other day";
                $noft->status="unread";

                //set noft no for clint
                $totalNotf = notfClint::get()->where('userId', $Cust);
                foreach($totalNotf as $row){
                    $unread=$row->unread;
                }
                $unread=$unread+1;
                notfClint::where('userId', $Cust)
                ->update([
                'unread' => $unread]);
        return redirect()->back()->with('message', 'Rejected! A notification is sent to the user');
    }

    public function viewPromotion($id)
    {
        $data = promotion::where('ownerId',$id)->get();
        return view('owner.promotionPage')->with('data',$data);
    }

    public function addpromotion($id, Request $request)
     {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'rprice' => 'required',
            'dprice' => 'required',
            'file' => 'required'
        ]);
        $obj = new promotion;
        $title = $request->title;
        $description = $request->description;
        $rprice = $request->rprice;
        $dprice = $request->dprice;
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getclientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/promotion/',$filename);
            $obj->pic = $filename;
        }
        else 
        {
            return $request;
            $obj->img = '';
        }
        
        $obj->ownerId= $id;
        $obj->title = $title;
        $obj->description = $description;
        $obj->realPrice = $rprice;
        $obj->discountPrice = $dprice;

        $obj->save();

        return redirect()->back()->with('message', $title.'! Promotion add Successfully!');

    }
    public function editPromotion($id, Request $request)
    {
        promotion::where('id', $id)->update([
        'title' => $request->title,
        'description' => $request->description,
        'realPrice' => $request->rprice,
        'discountPrice' => $request->dprice
        ]);
        
        return redirect()->back()->with('message','Promotion Has Been Updated Successfully!');
    }
}
