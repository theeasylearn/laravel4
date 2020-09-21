<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HelloController extends Controller
{
    //request object has all the data password from routes
    public function index(Request $request){
        //return "Hello sir, how are you? I am your controller";
        return view('hello');
    }
}
