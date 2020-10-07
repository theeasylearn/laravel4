<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\MyClass;
class MyMailController extends Controller {
    public function text() {
       //this array has key value pair that we want to print using template
       $data = array('name'=>"The Easylearn Academy"); 
       Mail::send(['text'=>'mail'], $data, function($message) {
          $message->to('theeasylearn@gmail.com', 'First email from The Easylearn')->subject
             ('Laravel Basic Testing Mail');
          $message->from('demoblahblahblah@gmail.com','The Easylearn Academy');
       });
       echo "Email Sent";
    }
    public function html() {
       $data = array('name'=>"The Easylearn Academy");
       Mail::send('mail', $data, function($message) {
          $message->to('theeasylearn@gmail.com', 'First email from The Easylearn')->subject
             ('Laravel HTML Testing Mail');
          $message->from('demoblahblahblah@gmail.com','The Easylearn Academy');
       });
       echo "HTML Email Sent";
    }
    public function sendmail(Request $request) 
    {
      $data = array('mysubject'=>$request->txtsubject,'mymessage'=>$request->txtmessage);
      Mail::send('mailtemplate', $data, function($message) use ($request) {
         $message->to($request->txtemail,'')->subject($request->txtsubject);
         $message->from(MyClass::getSenderEmail(),MyClass::getSenderName());
      });
      return view("compose-mail")->with("message","Mail send");
      
   }

    public function attachment() {
       $data = array('name'=>"The Easylearn Academy");
       Mail::send('mail', $data, function($message) {
          $message->to('theeasylearn@gmail.com', 'First email from The Easylearn')->subject
             ('Laravel Testing Mail with Attachment');
          $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
          $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
          $message->from('demoblahblahblah@gmail.com','The Easylearn Academy');
       });
       echo "Email Sent with attachment.";
    }
 }
 