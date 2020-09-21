<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function post(Request $request){

        $this->validate($request,
        [
            "txtname"=>"required|min:12",
            "filphoto"=>"required|mimes:'bmp,jpg,jpeg,png'|max:8192"
        ],
        [
            "txtname.required"=>"name is required",
            "txtname.min"=>"Name must be at least 12 character long",
            "filphoto.required"=>"File Must be selected",
            "filphoto.mimes"=>"File Must be image",
            "filphoto.max"=>"File Must be less 8MB in size",
        ]);

        $UniqueFileName = time() . "." . $request->filphoto->extension();
        $request->filphoto->move(public_path("images/"),$UniqueFileName);
        return view("fileexample")->with("message","file uploaded successfully");
    }
}
