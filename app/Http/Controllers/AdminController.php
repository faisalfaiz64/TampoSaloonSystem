<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\admin;
use App\appointment;
use App\add_product;
use App\conform_order;
use App\appointmentCharges;
use App\owner;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function userpage()
    {
        $mpost = admin::all();
        return view('admin.user')->with('mpost',$mpost);
    }
    public function appointmentPending()
    {
        $data = appointment::orderBy('a_id','desc')->get();
        return view('admin.appointment_admin_pending',compact('data'));
    }
    public function appointmentAccepted()
    {
        $data = appointment::orderBy('a_id','desc')->get();
        return view('admin.appointment_admin_accepted',compact('data'));
    }
    public function orderpagePending()
    {
        $data = conform_order::orderBy('id','desc')->get();
        return view('admin.order_view_pending',compact('data'));
       
    }
    public function orderpageArrived()
    {
        $data = conform_order::orderBy('id','desc')->get();
        return view('admin.order_view_arrived',compact('data'));
       
    }
     public function viewproduct()
    {
        $mpost = add_product::all();
        return view('admin.productview_admin')->with('mpost',$mpost);
    }


    /*=========================================================
     Product Functions
    ===========================================================*/
    public function addproduct(Request $request){

        $obj = new add_product;
        $name = $request->name;
        $description = $request->description;
        $category = $request->category;
        $expire_date = $request->expire_date;
        $stock = $request->stock;
        $price = $request->price;
        
        if ($request->hasfile('pro_pic')) {
            $file = $request->file('pro_pic');
            $extension = $file->getclientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/products/',$filename);
            $obj->img = $filename;
        }
        else 
        {
            return $request;
            $obj->img = '';
        }

        
        $obj->name = $name;
        $obj->description = $description;
        $obj->category = $category;
        $obj->exp_date = $expire_date;
        $obj->stock = $stock;
        $obj->price = $price;

        $obj->save();

        return redirect('/dashboard')->with('message', $name.'! item add Successfully!');
    }

    public function rmvProduct($id)
    {
        $mpost = add_product::find($id);
        $mpost->delete();
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $mpost = admin::find($id);
        $mpost->delete();
        return redirect('/userpage');
    }

    public function destroy_appointment($id)
    {
        $mpost = appointment::find($id);
        $mpost->delete();
        return redirect('/appointment_admin');
    }

    public function destroy_order($id)
    {
        $mpost = conform_order::find($id);
        $mpost->delete();
        return redirect()->back();
    }

     public function acceptAppointment(Request $req)
    {
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

                    


        
        //================= Booking Charges add krny hen =====================




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
                        $Cust=$row->admin_id;       //User id agai
                                          
                    
                    }
         // Adding Charges to user cart ===============
                  
                    $charges = new appointmentCharges;

                    $charges->userId=$Cust;
                    $charges->bookingId=$id;
                    $charges->charges=200;
                    $charges->status="unpaid";
                    $charges->save();

                    


        
        //================= Booking Charges add krny hen =====================




        return redirect()->back()->with('message', 'Rejected! A notification is sent to the user');
        
    }

      public function acceptOrder(Request $req)
    {
                $id=$req->id;
                $order= new conform_order;
                $newStatus="Arrived";   
                $Cust = "";

        //===== Change Status
                conform_order::where('id', $id)
                ->update([
                'Delivery_status' => $newStatus ]);



        return redirect()->back()->with('message', 'Accepted Successfully! A notification is sent to the user');
        
    }

    /*=========================================================
     Onwer Functions
    ===========================================================*/


    public function addOwner(Request $request)
    {
        $obj = new owner;
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $password = $request->password;
        $area = $request->area;
        $phone = $request->phone;
        
        if ($request->hasfile('img')) {
            $file = $request->file('img');
            $extension = $file->getclientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/owners',$filename);
            $obj->img = $filename;
        }
        else 
        {
            return $request;
            $obj->img = '';
        }

        
        $obj->Salon_name = $name;
        $obj->email = $email;
        $obj->address = $address;
        $obj->area = $area;
        $obj->password = $password;
        $obj->phone_no = $phone;

        $obj->save();

        return redirect('/dashboard')->with('message', $name.'! Owner add Successfully!');
    }

    public function all_owner()
    {
        $mpost = owner::all();
        return view('admin.owner')->with('mpost',$mpost);
    }

    public function delete_salon($id)
    {
        $mpost = owner::find($id);
        $mpost->delete();
        return redirect('/owner');
    }
}
