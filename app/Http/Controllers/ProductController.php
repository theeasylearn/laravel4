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

    /**
     * Store a newly created Product in Product table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = MyClass::GetFormDataWithFile($request,'filphoto','photo');
        $product = Product::create($data); //ORM 
        /* move uploaded file into project directory */
        $request->file('filphoto')->move(public_path('images/product'),$data['photo']);
        return back()->with('message',"Product added successfully");
    }

    /**
     * Display the specified Product whose id is given.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the Product.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $Product)
    {
        //
    }

    /**
     * Update the specified Product in Product table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $Product)
    {
        //
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
        //
    }
}
