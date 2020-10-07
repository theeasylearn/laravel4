<?php
namespace App;
use Illuminate\Http\Request;
class MyClass 
{
    public static function GetFormDataWithFile(Request $request,$FileControlName,$FieldName,$OldFileName=null)
    {
        $file = $request->file($FileControlName);  //Create File Object
        $data = $request->all();
        if($file!=null)
        {
            $FileExtension = "." . $file->extension();
            $data[$FieldName] = rand(10,99)  . rand(10,99)  . rand(10,99)  . $FileExtension;
        }
        else 
        {
            $data[$FieldName] = $OldFileName;
        }
        return $data;
    }

    public static function getSenderEmail(){
        return "demoblahblahblah@gmail.com";
    }

    public static function getSenderName(){
        return "The EasyLearn Academy";
    }
}