<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function post(Request $request)
    {
        //txtemail required email
        //txtpassword & txtpassword2 required both match 
        //txtmobile required exactly 10 digit 
        //txtdob required
        $this->validate($request,[
            "txtemail"=>"required|email",
            "txtpassword"=>"required|min:6",
            "txtpassword2"=>"required|min:6|same:txtpassword",
            "txtmobile"=>"required|numeric|min:10",
            "txtdob"=>"required|date"
        ],[
            "txtemail.required"=>"email is required",
            "txtemail.email"=>"please provide valid email address",
            "txtpassword.required"=>"password is required",
            "txtpassword.min"=>"password must be at least 6 character long",
            "txtpassword2.required"=>"confirm password is required",
            "txtpassword2.min"=>"confirm password must be at least 6 character long",
            "txtpassword2.same"=>"password and confirmed password",
            "txtmobile.required"=>"mobile is required",
            "txtmobile.min"=>"Mobile no must be exactly of 10 digit",
            "txtmobile.numeric"=>"Only digits allowed in mobile no",
            "txtdob.required"=>"date of birth is required",
            "txtdob.date"=>"please give valid date"
        ]);
        //we will stored this data into database
        //if input validation failed then laravel automatically submit all occured errors on view file automatically
        dd("Input validation successful");
        
    }
}
