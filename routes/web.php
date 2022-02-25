<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/*=========================================================
     User Route
===========================================================*/
Route::get('/verUser', 'mycontroller@verifyUser')->name('verify.user');
Route::get('/login', 'mycontroller@login');
Route::get('/logout', 'mycontroller@logout');
Route::get('/signup','mycontroller@signup');
Route::get('/deals/men_services/{id}','mycontroller@men_services');
Route::get('/deals/women_services/{id}','mycontroller@women_services');
Route::POST('/register','mycontroller@register')->name('register');
Route::POST('/validate','mycontroller@validatelogin');
Route::get('/panel','mycontroller@panel');
Route::POST('/storeappointment/{id}','mycontroller@storeappointment');
Route::POST('/storeappointment','mycontroller@storeappointment1');
Route::POST('editprofile/{id}','mycontroller@editprofile');
Route::get('/user_appointment','mycontroller@show_appointment');
Route::POST('/search','mycontroller@search');
Route::get('/ShowSalon/{id}','mycontroller@ShowSalon');
Route::get('/directAppointments','mycontroller@directAppointments');
Route::get('/notifications','mycontroller@notifications');
Route::get('/deleteNotf/{id}','mycontroller@deleteNotf');
Route::get('/service', function () {
    return view('service');
});
Route::get('/appointments/{id}','mycontroller@appointments');
Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/services-women', function () {
    return view('services-women');
});
Route::get('/services-men', function () {
    return view('services-men');
});
Route::get('/elearning', function () {
    return view('elearning');
});

Route::get('/user_conformOrder', 'mycontroller@user_conformOrder');

Route::POST('/Feedback_save/{id}', 'mycontroller@FeedbackSave');
Route::get('/Feedback/{id}', 'mycontroller@Feedback');
/*=========================================================
     Payment Route
===========================================================*/
Route::POST('/confirmation/{id}', 'mycontroller@comformation_cart');
Route::POST('/confirmation/{id}', 'mycontroller@comformation');
Route::get('/paymentpro', 'mycontroller@payment');
Route::POST('/done_order/{id}','mycontroller@done_order')->name('done_order');;

Route::get('checkout/{id}','CheckoutController@checkout');
Route::post('checkout','CheckoutController@afterpayment')->name('checkout.credit-card');

/*=========================================================
     Product Route
===========================================================*/

Route::get('/moreinfo/{id}','mycontroller@pro_details');
Route::get('/product','mycontroller@show_product');


/*=========================================================
     Cart Route
===========================================================*/
Route::get('/addToCart/{id}'  ,'mycontroller@addToCart')->name('addToCart');                           
Route::get('/cart', 'mycontroller@show_cart');
Route::get('/rmvFromCart'  ,'mycontroller@rmvFromCart')->name('rmvFromCart');

/*=========================================================
     Owner Route
===========================================================*/
Route::get('/OwnerLogin','OwnerController@login');
Route::get('/OwnerValidateLogin','OwnerController@validatelogin');
Route::get('/owner_panel','OwnerController@panel')->middleware('checkowner');
Route::get('/owner_services_view/{id}','OwnerController@owner_services_view')->middleware('checkowner');
Route::POST('/M_S_add_by_owner/{id}','OwnerController@M_S_add_by_owner')->middleware('checkowner');
Route::POST('/W_S_add_by_owner/{id}','OwnerController@W_S_add_by_owner')->middleware('checkowner');
Route::get('/OwnerPAppointments/{name}','OwnerController@OwnerPAppointments')->middleware('checkowner');
Route::get('/OwnerAAppointments/{name}','OwnerController@OwnerAAppointments')->middleware('checkowner');
Route::get('/ownerAcceptAppointment', 'OwnerController@acceptAppointment')->name('ownerAcceptAppointment');
Route::get('/ownerRejectAppointment', 'OwnerController@rejectAppointment')->name('ownerRejectAppointment');
Route::get('/viewPromotion/{id}','OwnerController@viewPromotion')->middleware('checkowner');
Route::POST('/addpromotion/{id}','OwnerController@addpromotion')->middleware('checkowner');
Route::POST('/editPromotion/{id}','OwnerController@editPromotion')->middleware('checkowner');
/*=========================================================
     Admin Route
===========================================================*/

Route::get('/dashboard','AdminController@dashboard')->middleware('checkuser');

Route::get('/userpage','AdminController@userpage')->middleware('checkuser');
Route::get('/all_owner','AdminController@all_owner')->middleware('checkuser');
Route::get('delete/{id}','AdminController@destroy')->middleware('checkuser');
Route::get('delete_salon/{id}','AdminController@delete_salon')->middleware('checkuser');
Route::get('/appointment_admin_pending','AdminController@appointmentPending')->middleware('checkuser');
Route::get('/appointment_admin_accepted','AdminController@appointmentAccepted')->middleware('checkuser');
Route::get('/order_admin_pending','AdminController@orderpagePending')->middleware('checkuser');
Route::get('/order_admin_arrived','AdminController@orderpageArrived')->middleware('checkuser');
Route::get('/acceptAppointment', 'AdminController@acceptAppointment')->name('acceptAppointment')->middleware('checkowner');
Route::get('/rejectAppointment', 'AdminController@rejectAppointment')->name('rejectAppointment')->middleware('checkowner');

Route::POST('/M_S_add','mycontroller@M_S_add');
Route::POST('/W_S_add','mycontroller@W_S_add');
Route::get('/acceptOrder', 'AdminController@acceptOrder')->name('acceptOrder');

Route::get('delete_appointment/{id}','AdminController@destroy_appointment');

Route::get('delete_order/{id}','AdminController@destroy_order');

Route::get('/viewproduct','AdminController@viewproduct');

Route::POST('/productsave','AdminController@addproduct');
Route::POST('/addOwner','AdminController@addOwner');
Route::get('/rmvProduct/{id}', 'AdminController@rmvProduct');

Route::get('/branches', function () {
    return view('branches');
});

Route::get('/blog_detail', function () {
    return view('blog_detail');
});

