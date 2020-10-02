<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\MyClass;

class ProductController extends Controller
{
    /**
     * Display a listing of the Product.
     *
     * @return \Illuminate\Http\Response(
     */
    public function index()
    {
       $_SESSION['data'] = array();
       $rows= Product::with('category')->get()
            ->map(function ($rows) {
                array_push($_SESSION['data'],array(
                    'id' => $rows->id,
                    'title' => $rows->title,
                    'price' => $rows->price,
                    'photo' => $rows->photo,
                    'categorytitle' => $rows->category->title,
                    'created_at' => $rows->getCreationDate(),
                    'updated_at' => $rows->getUpdationDate(),

                ));
            });
       $data = $_SESSION['data'];
       unset($_SESSION['data']);
       return view("products")->with("result",$data);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $result = Category::get(["id","title"]);
        return view("insert_product")->with("categories",$result);
    }

    public function store(Request $request)
    {
        $data = MyClass::GetFormDataWithFile($request,'filphoto','photo');
        $product = Product::create($data); //ORM 
        /* move uploaded file into project directory */
        $request->file('filphoto')->move(public_path('images/product'),$data['photo']);
        return back()->with('message',"Product added successfully");
    }
    public function edit(Request $request)
    {
        $category = Category::get(["id","title"]);
        $product= Product::where('id',$request->id)->get();
        return view("insert_product")->with("categories",$category)->with("products",$product);
    }

    public function update(Request $request)
    {
        $data = MyClass::GetFormDataWithFile($request,'filphoto','photo',$request->oldphoto);
        $product = Product::find($request->id);
        /* $product->categoryid = $data['categoryid'];
        $product->title = $data['title'];
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->photo = $data['photo'];
        $product->detail = $data['detail'];
        $product->save(); //update record in table */
        unset($data['_token'],$data['oldphoto']);
        Product::where('id', $request->id)->update($data);
        if($request->file('filphoto')!= null)
        {
            //delete old photo
            $FileName = public_path('images/product/') . $request->oldphoto;
            unlink($FileName);
            //move photo from temp directory to project directory 
            $request->file('filphoto')->move(public_path('images/product'),$data['photo']);
        }
        $_SESSION['data'] = array();
        $rows= Product::with('category')->get()
             ->map(function ($rows) {
                 array_push($_SESSION['data'],array(
                     'id' => $rows->id,
                     'title' => $rows->title,
                     'price' => $rows->price,
                     'photo' => $rows->photo,
                     'categorytitle' => $rows->category->title,
                     'created_at' => $rows->getCreationDate(),
                     'updated_at' => $rows->getUpdationDate(),
                 ));
             });
        $data = $_SESSION['data'];
        unset($_SESSION['data']);
        return view("products")->with("result",$data)->with('message',"Product Updated successfully");
    }

    public function destroy(Request $request)
    {
        $res=Product::where('id',$request->id)->delete();
        unlink(public_path('images/product/') . $request->photo);
        return back()->with('message',"Product deleted successfully");
    }
}
