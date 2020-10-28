<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\quote;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//retrive all quotes
Route::get("/quotes",function(){
    config('global.logger')->info('all quotes fetched');
    // $GLOBALS['logger']->warning('This is a log warning! ^_^ ');
    // $GLOBALS['logger']->error('This is a log error! ^_^ ');
    return quote::all();
});

//retrive specific quote
Route::get("/quotes/{id}",function(Request $request,$id){
    config('global.logger')->info("$id quote fetched");
    $response = quote::find($id);
    if($response!=null)
        return $response;
    else 
        return array("error"=>"nothing found");
});
//add new quote
Route::post("/quotes",function(Request $request){
    config('global.logger')->info('new quote added title = ' . $request->title . ' author = ' . $request->author . ' like = ' . $request->like);
    return quote::create($request->all());
});

//delete quote
Route::delete("/quotes/{id}",function($id){
    config('global.logger')->warning('Attention Quote deleted ' . $id);
    return quote::destroy($id);
});

//update route 
Route::post("/quotes_2",function(Request $request)
{
    config('global.logger')->warning('Attention Quote updated ' . $request->id);
    $qt=quote::find($request->id);
    $qt->fill($request->all());
    $qt->save();
    return $qt;
});