<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\quote;
use Facade\FlareClient\Http\Response;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//retrive all quotes
Route::get("/quotes",function(){
    return quote::all();
});

//retrive specific quote
Route::get("/quotes/{id}",function(Request $request,$id){
    $response = quote::find($id);
    if($response!=null)
        return $response;
    else 
        return array("error"=>"nothing found");
});
//add new quote
Route::post("/quotes",function(Request $request){
    return quote::create($request->all());
});

//delete quote
Route::delete("/quotes/{id}",function($id){
    return quote::destroy($id);
});

//update route 
Route::post("/quotes_2",function(Request $request)
{
    $qt=quote::find($request->id);
    $qt->fill($request->all());
    $qt->save();
    return $qt;
});