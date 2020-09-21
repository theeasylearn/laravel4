<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//controller is means to process data not to input/output data;
class BmiController extends Controller
{
    public function post(Request $request){
        //$request object has all the input passed to post method 
        //print_r($request->all());
        $height = request("txtheight"); // in foot
        //convert height into meter
        $meter = $height/3.281;
        $weight = request("txtweight"); 
        $bmi = round($weight / ($meter * $meter),2);
        if($bmi<18)
            $result = "Underweight";
        else if($bmi<24.9)
            $result = "Healthy weight";
        else if($bmi<29.9)
            $result = "OverWeight";
        else 
            $result = "Obese";
        //echo "<br/> you are $result";
        return view("bmiresult")->with("bmi",$bmi)->with("result",$result);
    }
}
