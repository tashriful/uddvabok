<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\product_image;
use App\Category;
use Image;



class ProductController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth:admin');
    }
    
    
     public function index(){
        $categorys = category::orderBy('id' , 'desc')->get();
        
        
        return view('admin.pages.productAdd')->with('categorys' , $categorys);;
    }
    
    
    
    public function productAdd(Request $request){
        
        //validaton
        
        $validatedData = $request->validate([
        'title' => 'required|max:100',
        'description' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric',
            
    ]);
        
        
        
        
        $Product = new product();
        $Product->category_id = $request->category;
        $Product->title = $request->title;
        $Product->User_Type = $request->utype;
        $Product->description = $request->description;
        $Product->quantity = $request->quantity;
        $Product->status = 0;
        $Product->price = $request->price;
        $Product->save();
        
        
        //product_image model for insert image
        
        if ($request->hasFile('image')) {
          //insert that image
          $image = $request->file('image');
          $img = $image->getClientOriginalName();
          $location = public_path('images/products/' .$img);
          Image::make($image)->save($location);
    
          $product_image = new product_image;
          $product_image->product_id = $Product->id;
          $product_image->image = $img;
          $product_image->save();
        }
        
        
        session()->flash('success' ,'Product has Added successfully!!');
        
        return redirect()->route('admin.productAdd');
        
        
    }
    
    public function productUpdate(Request $request , $id){
        
        //validaton
        
        $validatedData = $request->validate([
        'title' => 'required|max:100',
        'description' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric',
            
    ]);
        
        
        
        
        $Product = product::find($id);
        $Product->category_id = $request->category;
        $Product->title = $request->title;
        $Product->User_Type = $request->utype;
        $Product->description = $request->description;
        $Product->quantity = $request->quantity;
        $Product->status = $request->status;
        $Product->price = $request->price;
        $Product->My_Price = $request->myprice;
        $Product->save();
        
        //product_image model for insert image
        
        if ($request->hasFile('image')) {
          //insert that image
          $image = $request->file('image');
          $img = $image->getClientOriginalName();
          $location = public_path('images/products/' .$img);
          Image::make($image)->save($location);
    
          $product_image = new product_image;
          $product_image->product_id = $Product->id;
          $product_image->image = $img;
          $product_image->save();
        }
        
        
        session()->flash('success' ,'Product has Updated successfully');
        
        return redirect()->route('admin.productShow');
        
        
    }
    
    public function productShow(){
        
        $products = product::orderBy('id' , 'desc')->get();
        
        
        return view('admin.pages.productShow')->with('products' , $products);
    }
    
    
    public function productEdit($id){
        
       $std = product::find($id);
        //$cat = Category::find($std->category_id);
        $category = Category::orderBy('id' , 'desc')->get();
        return view('admin.pages.productEdit')->with('product' , $std)->with('category' , $category);
    }
    
    public function productDelete($id){
        
       $std = product::find($id);
        $std->delete();
        session()->flash('success' ,'Product has deleted successfully ');
        
		 return back();
    }
    
    
    
}
