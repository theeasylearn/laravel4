<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MyController extends Controller
{
    public function index(Request $request){
        return view("flowers");
    }
    public function message(Request $request,$name){
        $param = ["name"=>$name,"country"=>"india","state"=>"Gujarat"]; //associative array 
        return view("message")->with($param);
    }
    public function PrintFruits(Request $request,$fruit1,$fruit2,$fruit3){
        
        $fruit1 = strtoupper($fruit1);
        $fruit2 = strtoupper($fruit2);
        $fruit3 = strtoupper($fruit3);
        
        return view("fruits")->with("f1",$fruit1)->with("f2",$fruit2)->with("f3",$fruit3);
    }
    public function PrintPlaces(Request $request,$place1,$place2,$place3){
        
        $place1 = strtolower($place1);
        $place2 = strtolower($place2);
        $place3 = strtolower($place3);

        return view("places",["p1"=>$place1,"p2"=>$place2,"p3"=>$place3]);
    }
    public function PrintLanguages(Request $request,$lang1,$lang2){
        return view("languages",compact("lang1","lang2"));
    }
}
