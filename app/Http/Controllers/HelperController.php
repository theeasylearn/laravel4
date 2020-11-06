<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HelperController extends Controller
{
    public function GetDate(){
        echo GetMyDate();
        echo GeneratePDF("<h1>this is sample pdf generated</h1><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo repellendus, totam repellat harum vitae nisi asperiores illum! Veniam atque sit laboriosam! Asperiores inventore aliquid eum nesciunt assumenda libero praesentium corporis.</p>");
    }
    public function GetTime(){
        echo GetMyTime();
        echo GeneratePDF("<h1>this is 2nd sample pdf generated</h1><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo repellendus, totam repellat harum vitae nisi asperiores illum! Veniam atque sit laboriosam! Asperiores inventore aliquid eum nesciunt assumenda libero praesentium corporis.</p>");
    }
}

