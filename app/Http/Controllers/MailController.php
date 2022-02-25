<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\signupmail;
use App\Mail\MainController;

class MailController extends Controller
{
   public static function sendSignupEmail ( $name,$email,$verification_code)
   {
   	$data = [
   		'name' => $name,
   		'verification_code' => $verification_code
   	];
   	Mail::to($email)->send(new signupmail($data));
   }
}
