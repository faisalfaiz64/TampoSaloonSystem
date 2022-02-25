<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\signupmail;
use Session;
use App\admin;
use App\appointment;
use App\add_product;
use App\men_services;
use App\appointmentCharges;
use App\women_services;
use App\cart;
use App\order;
use App\conform_order;
use App\Feedback;
use App\Feedback_Data;
use App\owner;
use App\Mail\MainController;
use App\notfClint;
use App\notfOwner;
use App\notfDetailClint;
use App\notfDetailOwner;
use Crypt;

class mycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('home');
    }
    public function pro_details($id)
    {
        $user_id= Session::get('id');
        $mpost = add_product::find($id);
        $Feedback = Feedback::where('proId', $id)->get();
        return view('product_detail')->with('mpost',$mpost)->with('Feedback',$Feedback);
    }
    public function Feedback($id)
    {
        $user_id= Session::get('id');
        $data = conform_order::where('prodId',$id)->where('admin_id',$user_id)->get();

        return view('feedback')->with('data', $data);
    }
     public function show_product()
    {
        $mpost = add_product::all();
        return view('product')->with('mpost', $mpost);
    }
    
    

    public function editprofile($id,Request $request)
    {
        $mpost = admin::find($id);
        $name = $request->name;
        $email = $request->email;
        $phone_no = $request->phone_no;
        $img = $request->img;
        
        $mpost->name = $name;
        $mpost->email = $email;
        $mpost->phone_no = $phone_no;
        if ($request->hasfile('pic')) {
            $file = $request->file('pic');
            $extension = $file->getclientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/users/',$filename);
            $mpost->img = $filename;
        }
        else 
        {
            return $request;
            $mpost->img = '';
        }
        $mpost->save();
        session()->flush();
        $obj = new admin;
        $user=$obj::where('email', $email)
        ->where('name',$name)->get();
        foreach($user as $row)
       {
           $userEmail=$row->email;
           $userName=$row->name;
           $id=$row->id;
           $phone=$row->phone_no;
           $img = $row->img;
       }
        if($userName!="")
        { 
            session(['user'=>'customer','id'=> $id,'email'=>$userEmail,'name'=>$userName,]);
            return redirect('/panel')->with('message', $userName.'! Your Profile Update Successfully!');    
        }
        return redirect('/panel');
    }


    /*=========================================================
     Login & Registration Functions
    ===========================================================*/


    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        session()->flush();
        return redirect('/')->with('message','You Are Logged Out.');
    }
    public function signup()
    {
        return view('SignupPage');
    }


    public function register(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            're_password' => 'required|min:6',
            'phone_no' => 'required',
            'img' => 'required',
            'agree-term' => 'required',
        ]);
        $obj = new admin;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $phone_no = $request->phone_no;
        $re_password = $request->re_password;
        if ($password == $re_password ) 
        {
            if ($request->hasfile('img')) {
                $file = $request->file('img');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('images/users/',$filename);
                $obj->img = $filename;
            }
            else 
            {
                return $request;
                $obj->img = '';
            }
            $userEmail = "";
            

            if ($email != "")
            {
                $useremail = $obj::where('email', $email)->get();
                foreach($useremail as $row)
                {
                   $userEmail=$row->email;
                }
                if ($userEmail == $email) 
                {
                    if (Session::get('user')) 
                    {
                        return redirect('/dashboard')->with('message', $email.' is already exist!');
                    }
                    else
                    {
                        return redirect('/signup')->with('message', $email.' is already exist!');
                    }
                }
                else
                {
                    $obj->name = $name;
                    $obj->email = $email;
                    $obj->password =$password;
                    $obj->phone_no = $phone_no;
                    $obj->re_password = $re_password;
                    $obj->verification_code = sha1(time());
                    $obj->save();
                    if (Session::get('user'))
                    {
                        return redirect('/dashboard')->with('message', $name.'!  Added Successfully!');
                    }
                    else
                    {
                        if ($obj != null) 
                        {
                            MailController::sendSignupEmail($obj->name,$obj->email,$obj->verification_code);
                            return redirect('/login')->with('message', $name.'! You are Registered Successfully! Please check verification msg!');
                        }
                        
                    }
                }
            }
            else
            {
                if (Session::get('user')) 
                {
                $error=true;
                   return redirect('/dashboard')->with('message','404');
                }
                else
                {
                $error=true;
                return redirect('/signup')->with('message','404');
                }
            }
        }
    }

    public function validatelogin(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'pass' => 'required',
        ]);
        $userName="";
        $email= $request->email;
        $pass= $request->pass;

        $obj = new admin;
        $user=$obj::where('email', $email)->where('password',$pass)->get();
        foreach($user as $row)
       {
           $userEmail=$row->email;
           $userName=$row->name;
           $id=$row->id;
           $phone=$row->phone_no;
           $img = $row->img;
           $is_verified = $row->is_verified;
       }
        if($userName!="")
        { 
            if ($is_verified == 1) 
            {

                if ($userName == 'hasham' || $userName == 'faisal') 
                {
                    session(['user'=>'admin','id'=> $id,'email'=>$userEmail,'name'=>$userName]);
                    return redirect('/dashboard');
                }
                else
                {
                    $unread= "none";
                    $read= "none";
                    $notf = new notfClint;
                    $temp=$notf::where('clintId', $id)->get();
                    // Getting Notifications
                    foreach($temp as $data)
                     {
                         $unread=$data->unread;
                         $read=$data->read;  
                     }
                    //   if there is no record
                    if($unread === "none")
                     {
                        $notf->clintId=$id;
                        $notf->unread=0;
                        $notf->read=0;
                        $notf->save();
                        $unread = 0;
                     }
                    session(['user'=>'customer','id'=> $id,'email'=>$userEmail,'name'=>$userName,]);
                    session(['noft'=>$unread]);
                    return redirect('/panel')->with('message', $userName.'! You are Logged in Successfully!');
                }
            }
            else
            {
                return redirect('/login')->with('message','Your Email Is Not Verified. Please Verified it First Then Login!');
            }             
        }
        else
        {
            $error=true;
            return redirect('/login')->with('message','404');
        }
    }

    public function panel(){
        $user = Session::get('user');
        $id = Session::get('id');
        if ($user == "owner") {
            $adm = new owner;
            $info = $adm::where('id',$id)->first();
            return view('owner.owner',compact('info'));
        }
        else
        {
            $adm = new admin;
            $info = $adm::where('id',$id)->first();
            return view('profile',compact('info'));
        } 
    }

    /*=================================================================================================*/

    /*=========================================================
     Services Functions
    ===========================================================*/

    public function men_services($id)
    {
        $salonId = $id;
        $mpost = men_services::where('userId',$id)->get();
        return view('services-men',compact('salonId'))->with('mpost', $mpost);
    }
    public function women_services($id)
    {
        $salonId = $id;
        $mpost = women_services::where('userId',$id)->get();
        return view('services-women',compact('salonId'))->with('mpost', $mpost);
    }


    
    public function M_S_add(Request $request){

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

        
        $obj->name = $name;
        $obj->price = $price;
        $obj->category = $category;
        

        $obj->save();

        return redirect('/panel')->with('message', $name.'! Service add Successfully!');

    }

     public function W_S_add(Request $request)
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
        
        
        $obj->name = $name;
        $obj->price = $price;
        $obj->category = $category;
        

        $obj->save();

        return redirect('/panel')->with('message', $name.'! Service add Successfully!');

    }

    /*=================================================================================================*/    
     
/*=========================================================
     Appointment Functions
===========================================================*/
    public function appointments($id)
    {
        $data = owner::where('id',$id)->first();
        return view('appointment',compact('data'));
    }

    public function directAppointments()
    {
        $data = owner::all();
        return view('directAppointment')->with('data',$data);
    }

    public function show_appointment()
    {
        $user_id = Session::get('id');
        $user = admin::find($user_id);
        return view('user_appointment')->with('appointments', $user->appointments);
    }

    public function storeappointment($ownerid,Request $request){
         $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'salon' => 'required',
            'Radios' => 'in:male,female',
            'selectservice' => 'required',
            'date_time' => 'required',
        ]);
         
         $user_id= Session::get('id');
        if ($user = Session::get('user'))
        {
            if ($user == 'customer') 
            {
                $name = $request->name;
                $email = $request->email;
                $radio = $request->Radios;
                $SalonName = $request->salon;
                $services = $request->selectservice;
                $date_time = $request->date_time;

                $status= "Pending";            
                $payment="none";


                $obj= new appointment;
                $obj->admin_id=$user_id;
                $obj->name = $name;
                $obj->email = $email;
                $obj->gender = $radio;
                $obj->SalonName = $SalonName;
                
                $obj->service = json_encode($request['selectservice']);
               
                $obj->status = $status;
                $obj->payment = $payment;
                $obj->date_time = $date_time;
                $obj->save();

                // to set Notifications
                $notf = new notfDetailOwner;
                $notf->userId= $user_id;
                $noft->ownerId = $ownerid;
                $noft->msg="Request For Appointment From {{$name}}";
                $noft->status="unread";
                $noft->save();
                //set noft no for owner
                $totalNotf = notfOwner::get()->where('ownerId', $ownerid);
                foreach($totalNotf as $row){
                    $unread=$row->unread;
                }
                $unread=$unread+1;
                notfOwner::where('ownerId', $ownerid)
                ->update([
                'unread' => $unread]);

                return redirect('/panel')->with('message',$name. '! Your Appointment Booked Successfully');
            }

        }
        else
        {
            return redirect('/')->with('message','404');
        }

    }
     public function storeappointment1(Request $request){
         $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'salon' => 'required',
            'Radios' => 'in:male,female',
            'selectservice' => 'required',
            'date_time' => 'required',
        ]);
         
         $user_id= Session::get('id');
        if ($user = Session::get('user'))
        {
            if ($user == 'customer') 
            {
                $name = $request->name;
                $email = $request->email;
                $radio = $request->Radios;
                $SalonName = $request->salon;
                $services = $request->selectservice;
                $date_time = $request->date_time;
                $ownerid = $request->ownerid;
                $status= "Pending";            
                $payment="none";


                $obj= new appointment;
                $obj->admin_id=$user_id;
                $obj->name = $name;
                $obj->email = $email;
                $obj->gender = $radio;
                $obj->SalonName = $SalonName;
                
                $obj->service = json_encode($request['selectservice']);
               
                $obj->status = $status;
                $obj->payment = $payment;
                $obj->date_time = $date_time;
                $obj->save();

                // to set Notifications
                $noft = new notfDetailOwner;
                $noft->userId = $user_id;
                $noft->ownerId =$ownerid;
                $noft->msg="Request For Appointment From user";
                $noft->status="unread";
                $noft->save();
                //set noft no for owner
                $totalNotf = notfOwner::get()->where('ownerId', $ownerid);
                foreach($totalNotf as $row){
                    $unread=$row->unread;
                }
                $unread=$unread+1;
                notfOwner::where('ownerId', $ownerid)
                ->update([
                'unread' => $unread]);

                return redirect('/panel')->with('message',$name. '! Your Appointment Booked Successfully');
            }

        }
        else
        {
            return redirect('/')->with('message','404');
        }

    }
        /* =============================================================================================*/
   

/*=========================================================
     Cart Functions
===========================================================*/
     public function addToCart($id)
    {
        
        $user_id= Session::get('id');
        if ($user = Session::get('user'))
        {
            if ($user == 'customer') 
            {
                $UserID = "";
                $cart= new cart;
                $Feedback = new Feedback_Data;
                $pid=$id;
                $userID = $cart::where('prodId',$pid)->get();
                
                foreach($userID as $row)
                {
                    $UserID=$row->prodId;
                    $clintid = $row->userId;
                }
                if($UserID == $pid && $user_id == $clintid) 
                {
                    return redirect()->back()->with('message', 'Product Already Added');
                }  
                else
                {
                    $cart->userId=$user_id;
                    $cart->prodId=$pid;
                    $cart->save();

                    $Feedback->userId=$user_id;
                    $Feedback->prodId=$pid;
                    $Feedback->save();

                    return redirect()->back()->with('message', 'Product added to Cart!');
                }
            }
        }
        else
        {
            return redirect('/product')->with('message','404');
        }
         
    }


    public function show_cart(Request $req)
    {
        

        $user_id = Session::get('id');
        $cart= new cart;
        $products= new add_product;

        $cartData=$cart::where('userId',$user_id)->get();

        $AllItems=array();
        foreach($cartData as $row)
        {
            $cartItems=$row->prodId;
            $data=$products::where('id', $cartItems)->get();
            array_push($AllItems,$data);
        }
        $msg=0;
        $extra=array('msg'=>$msg);
        return view('cart',compact('AllItems'),compact('extra'));  
    }

    public function rmvFromCart(Request $req)
    {   
        $cart=new cart;
        $pid=$req->id;
        $cart::where('prodId', $pid)->delete();
        $msg="Item removed from Cart";  
        return redirect('/cart')->with('message', 'Product is Removed From Cart!');   
    }

        /* =============================================================================================*/

    /*=========================================================
     Payment Functions
    ===========================================================*/

    public function comformation(Request $request, $id)
    {
        $proId= $id;
        $order= new order;
        $cart = new cart;
        $products= new add_product;
        $Feedback = new Feedback_Data;

        $user_id= Session::get('id');

        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $phone_no = $request->phone_no;

        $cart->userId = $user_id;
        $cart->prodId= $proId;
        $cart->save();

        $Feedback->userId = $user_id;
        $Feedback->prodId= $proId;
        $Feedback->save();
        
        $order->userId=$user_id;
        $order->name=$name;
        $order->email=$email;
        $order->prodId = $proId;
        $order->phone_no=$phone_no;
        $order->address=$address;
        $order->save();



        $cartData=$cart::where('userId',$user_id)->get();

        $AllItems=array();
        foreach($cartData as $row)
        {
            $cartItems=$row->prodId;
            $data=$products::where('id', $cartItems)->get();
            array_push($AllItems,$data);
        }
        $msg=0;
        $extra=array('msg'=>$msg); 

        $mpost = order::where('userId',$user_id)->latest('created_at')->first();
        return view('confirmation',compact('mpost','AllItems','extra'));
               
    }
    public function comformation_cart(Request $request, $id)
    {
        $order= new order;
        $cart = new cart;
        $products= new add_product;

        $user_id= Session::get('id');

        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $phone_no = $request->phone_no;

        
        
        $order->userId=$user_id;
        $order->name=$name;
        $order->email=$email;
        $order->prodId = $proId;
        $order->phone_no=$phone_no;
        $order->address=$address;
        $order->save();



        $cartData=$cart::where('userId',$user_id)->get();

        $AllItems=array();
        foreach($cartData as $row)
        {
            $cartItems=$row->prodId;
            $data=$products::where('id', $cartItems)->get();
            array_push($AllItems,$data);
        }
        $msg=0;
        $extra=array('msg'=>$msg); 

        $mpost = order::where('userId',$user_id)->latest('created_at')->first();
        return view('confirmation',compact('mpost','AllItems','extra'));
               
    }

    public function payment()
    {
        $user_id = Session::get('id');
        $cart= new cart;
        $products= new add_product;

        $cartData=$cart::where('userId',$user_id)->get();

        $AllItems=array();
        foreach($cartData as $row)
        {
            $cartItems=$row->prodId;
            $data=$products::where('id', $cartItems)->get();
            array_push($AllItems,$data);
        }
        $msg=0;
        $extra=array('msg'=>$msg);
        return view('paymentpro',compact('AllItems'),compact('extra'));  
    }

    public function done_order( $id)
    {
        $conform_order = new conform_order;
        $user_id = Session::get('id');
        $order = order::where('userId',$user_id)->latest('created_at')->first();
         $status= "Pending";  
        $conform_order->admin_id = $user_id;
        $conform_order->prodId = $order->prodId;
        $conform_order->name = $order->name;
        $conform_order->email = $order->email;
        $conform_order->address = $order->address;
        $conform_order->phone_no = $order->phone_no;
        $conform_order->amount = $id;
        $conform_order->Delivery_status = $status;

        $conform_order->save();

        $cartData = cart::where('userId', $user_id)->get();
        
        foreach ($cartData as $Data) 
        {
           $Data->delete();
        }

        return redirect('/')->with('message', 'Your Order Has Been Placed!');
        

    }
       public function user_conformOrder()
    {
        $user_id = Session::get('id');

        $user = admin::find($user_id);
      
         return view('user_conformOrder')->with('mpost', $user->conform_orders);
    }

        /* =============================================================================================*/

        public function FeedbackSave($id, request $request)
        {
            
            $Feedback = new Feedback;
            $user_id = Session::get('id');
            $Feedback->name = $request->name;
            $Feedback->userID = $user_id;
            $Feedback->FB = $request->FB;
            $data = Feedback_Data::where('prodId', $id)->first();
            $Feedback->proId = $data->prodId;
          
            if ($request->hasfile('pro_pic'))
            {
                $file = $request->file('pro_pic');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('images/Feedback/',$filename);
                $Feedback->img = $filename;
            }
            else 
            {
                return $request;
                $obj->img = '';
            }

            $Feedback->save();

            conform_order::where('admin_id', $user_id)
                ->update([
                'feedback' => 1 ]);
            
            return redirect('/user_conformOrder')->with('massage','Feedback Submitted!');
        }    


    public function verifyUser()
    {
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = admin::where('verification_code',$verification_code)->first();
        if ($user != null) 
        {
            $user->is_verified = 1;
            $user->save();
            return redirect('/login')->with('message','Your Account Is verified. Please Login!');
        }
        else
        {
            return redirect('/login')->with('message','Something Wrong With Your Verification Code.');
        }
    }



     public function search(Request $req)
    {
        $searchBranch=$req->Branch;
        
           $profiles = new owner;
            $data=$profiles::where('area', 'LIKE',"%{$searchBranch}%")->get();
           if(count($data)>0)
            {
                $msg="";
            }
            else
            {
                $msg="Nothing Found";
            }
            $kw=$searchBranch;
            $extra=array('msg'=>$msg, 'kw'=>$kw);

            return view('SearchResult',compact('extra'))->with('data',$data); 
    }
    public function ShowSalon($id)
    {
        $info = owner::find($id);
        return view('services',compact('info'));
    }

    public function notifications()
    {
        $user_id = Session::get('id');
        $user = Session::get('user');

        if ($user == 'owner') 
        {
            $notfData = notfDetailOwner::where('ownerId',$user_id)->get();
            notfOwner::where('ownerId', $user_id)
                ->update([
                'unread' => 0]);
                session(['noft'=>0]);
            return view('notifications')->with('notfData',$notfData);
        }
        elseif ($user == 'customer') 
        {  
            $notfData = notfDetailClint::where('userId',$user_id)->get();
            notfClint::where('clintId', $user_id)
                ->update([
                'unread' => 0]);
                session(['noft'=>0]);
            return view('notifications')->with('notfData',$notfData);
        }
    }
    public function deleteNotf($id)
    {
        $user = Session::get('user');

        if ($user == 'owner') 
        {
            $notfData = notfDetailOwner::where('id',$id)->delete();
            return redirect()->back();
        }
        elseif ($user == 'customer') 
        {  
            $notfData = notfDetailClint::where('id',$id)->delete();
            return redirect()->back();
        }
    }
}



