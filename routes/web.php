<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Pincode;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
date_default_timezone_set("asia/kolkata");
Route::get('/', function () {
    return view('welcome');
    //return "Welcome to the world of laravel";
});

Route::get('/laravel',function(){
    return 'Hello we are learning laravel <br/> this is an example route';
});

Route::get('/module2',function(){
    return "this is module 2";
});
Route::get('/greetings/{name}',"MyController@message");
Route::get('/fruits/{fruit1}/{fruit2}/{fruit3}',"MyController@PrintFruits");
//send request to controller using route
Route::get('/hello','HelloController@index');
Route::get('/flowers',"MyController@index");
Route::get("/places/{place1}/{place2}/{place3}","MyController@PrintPlaces");
Route::get("/languages/{lang1}/{lang2}","MyController@PrintLanguages");
Route::get("/foreach",function(){
    return view("foreach");
});
Route::get("/foreach2",function(){
    return view("foreach2");
});
Route::get("/forelse",function(){
    return view("forelse");
});
Route::get("/decision",function(){
    return view("decision");
});
Route::get("/while",function(){
    return view("while");
});
Route::get("/for",function(){
    return view("for");
});
Route::get("/contactus",function(){
    return view("contactus");
});
Route::get("/components",function(){
    return view("com");
});
Route::get("/home2",function(){
    return view("home2");
});
Route::get("/aboutus",function(){
    return view("aboutus");
});
Route::get("/contactus2",function(){
    return view("contactus2");
});
Route::get("/asset",function(){
    return view("asset");
});
Route::get("/register",function(){
    return view("register");
});
Route::post("/registerpost","RegisterController@post");
Route::get("/login",function(){
    return view("login");
});
Route::get("/bmi",function(){
    return view("bmi");
});
Route::post("/bmipost","BmiController@post");
Route::get("/bmiresult",function(){
    return view("bmiresult");
});
Route::get("/fileexample",function(){
    return view("fileexample");
});
Route::post("/FilePost","FileController@post");
Route::get("/insert/{title}/{photo}/{islive}",function(Request $r){
    $CurrentTimeStamp = date("Y-m-d h:i:s");
    DB::insert("insert into category (title,photo,islive,isdeleted,created_at) values (?,?,?,?,?)",[$r->title,$r->photo,$r->islive,'1',$CurrentTimeStamp]);
    return "new category inserted successfully";
});
Route::get("/insert_builder/{title}/{photo}/{islive}",function (Request $r){
    $CurrentTimeStamp = date("Y-m-d h:i:s");
    DB::table("category")->insert(['title'=>$r->title,'photo'=>$r->photo,'islive'=>$r->islive,'isdeleted'=>1,'created_at'=>$CurrentTimeStamp] ); 
    return "new category inserted successfully";
});
Route::get("/insert_builder2/{title}/{photo}/{islive}",function (Request $r){
    $CurrentTimeStamp = date("Y-m-d h:i:s");
    $id = DB::table("category")->insertOrIgnore(['title'=>$r->title,'photo'=>$r->photo,'islive'=>$r->islive,'isdeleted'=>1,'created_at'=>$CurrentTimeStamp] ); 
    if($id==0)
        return "category already exists ";
    else 
        return "new category inserted successfully ";
});
Route::get("/insert_builder3/{title}/{photo}/{islive}",function (Request $r){
    $CurrentTimeStamp = date("Y-m-d h:i:s");
    $id = DB::table("category")->insertGetId(['title'=>$r->title,'photo'=>$r->photo,'islive'=>$r->islive,'isdeleted'=>1,'created_at'=>$CurrentTimeStamp] ); 
    return "new category inserted successfully with $id";
});
Route::get("/update/{title}/{photo}/{islive}/{id}",function(Request $r){
    $NoOfCategory = DB::update("update category set title=?,photo=?,islive=? where id=?",[$r->title,$r->photo,$r->islive,$r->id]);
    return "$NoOfCategory Category Updated successfully";
});
Route::get("/update_builder/{title}/{photo}/{islive}/{id}",function(Request $r){
    DB::table("category")->where("id",$r->id)->update(["title"=>$r->title,"photo"=>$r->photo,"islive"=>$r->islive]);
    return " Category Updated successfully";
});
Route::get("/increment",function(Request $r){
    DB::table("category")->increment("isdeleted");
    echo "done";
});
Route::get("/decrement",function(Request $r){
    DB::table("category")->decrement("isdeleted");
    echo "done";
});
Route::get("/increment_step",function(Request $r){
    DB::table("category")->where("id",1)->increment("isdeleted",5);
    echo "done";
});
Route::get("/dd/{id}",function(Request $r){
    DB::table("category")->where("id",">",$r->id)->dd();
    echo "Dump Completed";
});
Route::get("/dump/{id}",function(Request $r){
    DB::table("category")->where("id","<",$r->id)->dump();
    echo "Dump Completed";
});
Route::get("/decrement_step",function(Request $r){
    DB::table("category")->decrement("isdeleted",5);
    echo "done";
});
Route::get("/delete/{id}",function (Request $r){
    $NoOfCategoryDeleted = DB::delete("delete from category where id=?",[$r->id]);
    return "$NoOfCategoryDeleted category deleted";
});
Route::get("delete_builder/{id}",function(Request $r){
    $NoOfCategoryDeleted = DB::table("category")->where('id',$r->id)->delete();
    if($NoOfCategoryDeleted)
        echo "Category deleted with id " . $r->id;
    else 
        echo "Category not found with id " . $r->id;
});
Route::get("/statement",function (Request $r){
    DB::statement("truncate table category");
    return "Category table is now empty";
});
Route::get("/selectall",function (Request $r){
    $result = DB::select("select * from category");
    return view("select")->with("result",$result);
});
Route::get("/select/{title}",function (Request $r){
    $result = DB::select("select * from category where title=?",[$r->title]); 
    //example of numeric array 
    return view("select")->with("result",$result);
});
Route::get("/select2/{title}",function (Request $r){
    $result = DB::select("select * from category where title=:title",["title"=>$r->title]); 
    //example of associative array 
    return view("select")->with("result",$result);
});
Route::get("/select_builder",function(Request $r){
    $result = DB::table("category")->get(); //it will fetch all row from table 
    return view("select")->with("result",$result);
    // foreach($result as $row)
    // {
    //     var_dump($row);
    // }
});
Route::get("/select_builder_where/{title}",function(Request $r){
    $result = DB::table("category")->where("title",$r->title)->get(); 
    return view("select")->with("result",$result);
});
Route::get("/select_builder_where_id/{id}",function(Request $r){
    $title = DB::table("category")->where("id",$r->id)->value("title"); //it will fetch title as string variable from table where given id match, value method return null if no record found
    if(is_null($title))
        echo "No value found";
    else 
        echo $title;
});
Route::get("/select_builder_pluck/{id}",function(Request $r){
    $result = DB::table("category")->pluck("title"); //it will fetch title as array  variable from table
    //var_dump($result);
    return view("title")->with("result",$result);

});
Route::get("/chunk",function(Request $r){
    $result = DB::table("category")->orderby("title")->get();
    return view("chunk")->with("result",$result);
});
Route::get("/count",function(Request $r){
    $total = DB::table("product")->count();
    return "Total Product are $total";
});
Route::get("/min",function(Request $r){
    $MinimumPrice = DB::table("product")->min("price");
    return "Minimum Price is  $MinimumPrice";
});

Route::get("/max",function(Request $r){
    $MaximumPrice = DB::table("product")->max("price");
    return "Maximum Price is  $MaximumPrice";
});

Route::get("/avg",function(Request $r){
    $AveragePrice = DB::table("product")->avg("price");
    return "Average Price is  $AveragePrice";
});
Route::get("/sum",function(Request $r){
    $TotalPrice = DB::table("product")->sum("price");
    return "Total Price is  $TotalPrice";
});

Route::get("/avg/{categoryid}",function(Request $r){
    $AveragePrice = DB::table("product")->where('categoryid',$r->categoryid)->avg("price");
    return "Average Price is  $AveragePrice of category " . $r->categoryid ;
});
Route::get("/exists/{productid}",function(Request $r){
    $isFound = DB::table("product")->where('id',$r->productid)->exists();
    if($isFound)
        echo "<br/> Product Found with id " . $r->productid;
    else 
        echo "<br/> Product not found ";
    
});
Route::get("/select_fields/{FieldName}",function(Request $r){
    $result = DB::table("category")->select($r->FieldName)->get();
    return view("select_fields")->with("result",$result)->with("FieldName",$r->FieldName);    
});
Route::get("/inner_join",function(Request $r){
    //it is inner join means it will get only matching record from both table according to condition given in join function
    $result = DB::table("category")->join("product","category.id","=","product.categoryid")->select("category.title","product.title as name","product.price","product.photo")->get();
    //var_dump($result);
    return view("join")->with("result",$result);    
});
Route::get("/left_join",function(Request $r){
    //it is inner join means it will get only matching record from both table according to condition given in join function
    $result = DB::table("category")->leftJoin("product","category.id","=","product.categoryid")->select("category.title","product.title as name","product.price","product.photo")->get();
    //var_dump($result);
    return view("join")->with("result",$result);    
});
Route::get("/right_join",function(Request $r){
    //it is inner join means it will get only matching record from both table according to condition given in join function
    $result = DB::table("category")->rightJoin("product","category.id","=","product.categoryid")->select("category.title","product.title as name","product.price","product.photo")->get();
    //var_dump($result);
    return view("join")->with("result",$result);    
});
Route::get("/full_join",function(Request $r){
    //it is inner join means it will get only matching record from both table according to condition given in join function
    $result = DB::table("category")->crossJoin("product")->select("category.title","product.title as name","product.price","product.photo")->get();
    return view("join")->with("result",$result);    
});
Route::get("/andwhere",function(Request $r){
    //this query builder will make sure that both conditions are true
    $result = DB::table("product")->where('price',8)->where('categoryid',4)->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/orwhere",function(Request $r){
    //this query builder will make sure that any one or both of the two condition is true
    $result = DB::table("product")->OrWhere('price',8)->OrWhere('categoryid',4)->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/like/{name}",function(Request $r){
    $result = DB::table("product")->where('title','like','%' . $r->name . '%')->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/whereyear/{year}",function(Request $r){
    $result = DB::table("product")->whereYear('created_at',$r->year)->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/wheremonth/{month}",function(Request $r){
    $result = DB::table("product")->whereMonth('created_at',$r->month)->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/whereday/{day}",function(Request $r){
    $result = DB::table("product")->whereDay('created_at',$r->day)->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/wheretime/{time}",function(Request $r){
    $result = DB::table("product")->whereTime('created_at',$r->time)->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/wheredate/{date}",function(Request $r){
    $result = DB::table("product")->whereDate('created_at','<=',$r->date)->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/array/{categoryid}/{price}",function(Request $r){
    $result = DB::table("product")->where([['categoryid',$r->categoryid],['price',$r->price]])->get(); //it will get all product
    return view("products")->with("result",$result);    
});
Route::get("/wherecolumn",function(Request $r){
    $result = DB::table("product")->whereColumn('categoryid','=','price')->get(); 
    return view("products")->with("result",$result);    
});
Route::get("/wherecolumn2",function(Request $r){
    $result = DB::table("product")->orWhereColumn('categoryid','=','price')->orWhereColumn('created_at','<','updated_at')->get();
    return view("products")->with("result",$result);    
});
route::any("/anyrequest",function(Request $r){
    return view("anyrequest");
});
route::get("/country/{country}/state/{state}/",function (Request $r){
    return "Your country is " . $r->country . " and state is " . $r->state;
});
route::get("/course/{course?}/",function ($course = null)
{
    if($course == null)
        return "please select any course from list we provide";
    else 
        return "You have selected $course";
});
route::get("/fruit/{name}",function ($name){
    return "Your favourite fruit is " . $name;
})->where('name','[A-Za-z]+');
// closure function will only execute if we give data as per format
route::get("/luckynumber/{number}",function ($number){
    return "Your lucky number is " . $number;
})->where('number','[0-9]{1,2}+');
route::fallback(function(){
    return view("error");
});
route::get("/code/php/framework/laravel/",function (Request $request){
    return "you are currently learning laravel";
})->name("career");

route::get("/namedroute",function (Request $request){
    return redirect()->route('career');
});
route::view("/viewexample","anyrequest");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get("/createuser",function(Request $request)
{
    return view("createuser");
});
Route::post("/createuser","CreateUserController@store");
Route::get("/category","CategoryController@view");
Route::get("/category/delete/{id}/{file}","CategoryController@delete");
Route::get("/category/edit/{id}","CategoryController@edit");
Route::post("/createcategory","CategoryController@store");
Route::post("/updatecategory","CategoryController@update");
//product routes
Route::get("/product","ProductController@index");
Route::get("/insert_product","ProductController@create");
Route::post("/insert_product","ProductController@store");
Route::get("/product/delete/{id}/{photo}","ProductController@destroy");
Route::get("/product/edit/{id}","ProductController@edit");
Route::post("/update_product","ProductController@update");
Route::get("/mail_text","MyMailController@text");
Route::get("/mail_html","MyMailController@html");
Route::get("/mail_attach","MyMailController@attach");
Route::get("/compose_mail",function(){
    return view("compose-mail");
});
Route::post("/sendmail","MyMailController@sendmail");

/* AJAX Routes */

Route::get("/pincode",function (){
    $pincodes = Pincode::all();
    //echo json_encode($pincodes);
    return view("pincode")->with("pincodes",$pincodes);
});

Route::post("/pincode/create",function(){
    $pincode = Pincode::create($request->all());
    return Response::json($pincode);
});