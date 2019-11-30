<?php

namespace App\Http\Controllers;

use App\Category;
use App\product;
use App\product_image;
use App\Order;
use Image;

use Illuminate\Http\Request;
use Auth;

class SupplierController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:supplier');
    }
    
    
    public function index(){
        
        return view('supplier.pages.index');
    }
    
    
    public function productAddSubmit(Request $request){
        
        //validaton
        
        $validatedData = $request->validate([
        'title' => 'required|max:100',
        'description' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric',
            
    ]);
        
        
        
        
        $Product = new product();
        $Product->user_id = Auth::User()->id;
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
        
        
        
        session()->flash('success' ,'Product has Added successfully ');
       return back();
        
        
    }
    
    
    public function productAdd(){
         
         $category = Category::orderBy('id' , 'desc')->get();
        
        
        return view('supplier.pages.productAdd')->with('categorys' , $category);
    }
    
    public function productShow(){
        
        $products = product::all()->where('user_id', Auth::User()->id);
        
        
        return view('supplier.pages.productShow')->with('products' , $products);
    }
    
    public function productEdit($id){
        
       $std = product::find($id);
        //$cat = Category::find($std->category_id);
        $category = Category::orderBy('id' , 'desc')->get();
        return view('supplier.pages.productEdit')->with('product' , $std)->with('category' , $category);
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
        $Product->user_id = Auth::User()->id;
        $Product->category_id = $request->category;
        $Product->title = $request->title;
        $Product->User_Type = $request->utype;
        $Product->description = $request->description;
        $Product->quantity = $request->quantity;
        $Product->status = $request->status;
        $Product->price = $request->price;
        $Product->My_Price = $request->my_price;
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
        
        
        
        session()->flash('success' ,'Product has Updated successfully ');
        return redirect()->route('supplier.productShow');
        
        
    }
    
    public function productDelete($id){
        
       $std = product::find($id);
        $std->delete();
        session()->flash('success' ,'Product has deleted successfully ');
        
		 return back();
    }
    
    public function order()
    {
        
        //$products = product::orderBy('id' , 'desc')->get();
       
      
         $user = Auth::User()->id;
         $order = Order::where('uploader_id', $user)->get();
         
        return view('supplier.pages.order')->with('order' , $order);
    }
    
    public function account()
    {
        
        //$products = product::orderBy('id' , 'desc')->get();
       
      
         $user = Auth::User()->id;
         $order = Order::where('uploader_id', $user)->get();
         
        return view('supplier.pages.account')->with('order' , $order);
    }
    public function orderShow($id){
        
        $order = Order::where('id' , $id)->first();
         return view('supplier.pages.orderShow')->with('order' , $order);
        
        
    }
    
    public function completeOrder($id){
        
        $order = Order::find($id);
        if($order->is_delivered){
            $order->is_delivered = 0;
        }
        else{
            $order->is_delivered = 1;
        }
        $order->save();
        session()->flash('success' , 'Order Completed Status Changed');
        
         return back();
        
        
    }
    
    public function cancelOrder($id){
        
        $order = Order::find($id);
        if($order->is_canceled){
            $order->is_canceled = 0;
        }
        else{
            $order->is_canceled = 1;
        }
        $order->save();
        session()->flash('success' , 'Order Cancelled Status Changed');
        
         return back();
        
        
    }
    
     public function profile(){
        
        //$stdList = User::all()->where('category', 'Admin');
    	return view('supplier.pages.profile');
    }
}
