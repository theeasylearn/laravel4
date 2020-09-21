<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\MyClass;
use DB;
class CategoryController extends Controller
{
    public function GetCategories()
    {
        return DB::table("category")->get();
    }
    public function store(Request $request)
    {
        $data = MyClass::GetFormDataWithFile($request,'categoryphoto','photo');
        $category = Category::create($data); //ORM 
        /* move uploaded file into project directory */
        $request->file('categoryphoto')->move(public_path('images/category'),$data['photo']);
        return back()->with('message',"Category added successfully");
    }
    public function view(Request $request)
    {
        $categories = $this->GetCategories();
        $live = array("Not Live","Live");
        return view("category")->with("categories",$categories)->with("live",$live);
    }
    public function delete(Request $request)
    {
        $categories = DB::table("category")->where('id',$request->id)->delete(); //Eloquent query 
        $categories = $this->GetCategories();
        $live = array("Not Live","Live");
        $FileName = public_path('images/category/') . $request->file;
        unlink($FileName);
        return back()->with("categories",$categories)->with("live",$live)->with("message","Category Deleted");
    }
    public function update(Request $request)
    {
        $data = MyClass::GetFormDataWithFile($request,'categoryphoto','photo',$request->oldphoto);
        DB::table("category")->where("id",$data['categoryid'])->update(["title"=>$data['title'],"photo"=>$data['photo'],"islive"=>$data['islive']]);  //Eloquent query
        $categories = $this->GetCategories();
        $live = array("Not Live","Live");
        if($request->file('categoryphoto')!= null) #if user has selected new photo to change current photo then this condition will be true
        {
            //delete old photo
            $FileName = public_path('images/category/') . $request->oldphoto;
            unlink($FileName); #used to delete file from disk

            //move photo from temp directory to project directory 
             $request->file('categoryphoto')->move(public_path('images/category'),$data['photo']);
        }
        return view("category")->with("categories",$categories)->with("live",$live);
    }
    public function edit(Request $request)
    {
         $category = DB::table("category")->where("id",$request->id)->get();
         $category = $category[0];
         $yes = $no = null;
         if($category->islive==1)
            $yes = "checked='checked'";
         else 
            $no = "checked='checked'";
         return view("edit_category")->with("category",$category)->with("yes",$yes)->with("no",$no);
    }  
}