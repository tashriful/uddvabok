<?php

namespace App\Http\Controllers;
use App\Category;
use App\User;
use App\product;
use App\Order;

use Illuminate\Http\Request;
use Auth;

class userController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function userDashboard()
    {
        
        //$products = product::orderBy('id' , 'desc')->get();
       // $category = Category::orderBy('id' , 'desc')->get();
         $user = Auth::User();
         $category = Category::orderBy('id' , 'desc')->get();
         
        return view('home.pages.userDashboard')->with('category' , $category)->with('user' , $user);
    }
    
    
    public function userProfile()
    {
        
        //$products = product::orderBy('id' , 'desc')->get();
       // $category = Category::orderBy('id' , 'desc')->get();
         $user = Auth::User();
         $category = Category::orderBy('id' , 'desc')->get();
         
        return view('home.pages.userProfile')->with('category' , $category)->with('user' , $user);
    }
    
    public function userShow()
    {
        
        //$products = product::orderBy('id' , 'desc')->get();
       
      
         $user = Auth::User()->id;
         $order = Order::where('user_id', $user)->get();
         $category = Category::orderBy('id' , 'desc')->get();
         
        return view('home.pages.userOrder')->with('category' , $category)->with('order' , $order);
    }
    
    public function account()
    {
        
        //$products = product::orderBy('id' , 'desc')->get();
       
      
         $user = Auth::User()->id;
         $order = Order::where('user_id', $user)->get();
         $category = Category::orderBy('id' , 'desc')->get();
         
        return view('home.pages.account')->with('category' , $category)->with('order' , $order);
    }
    
    public function userOrderButton(Request $request)
    {
        
        //$order = new Order();
        
        $user = Auth::id();
        $product = $request->product_id;
        $uploader = $request->uploader_id;
        $category = Category::orderBy('id' , 'desc')->get();
        //$order->quantity = 1;
        //$order->price = 1;
        //$order->name = "kamal";
        ////$order->number= 1;
       // $order->address = "kamal";
       // $order->save();
        
         //return back();
        return view('home.pages.userOrderForm' )->with('product' , $product)->with('category' , $category)->with('user' , $user)->with('uploader' , $uploader);
    }
    
    
     public function userOrderSubmit(Request $request)
    {
        
        $order = new Order();
        
        $order->user_id = $request->user_id;
         $order->uploader_id = $request->uploader_id;
         $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->price = $request->price;
        $order->name = $request->name;
        $order->number= $request->number;
        $order->address = $request->address;
        $order->save();
         
        $category = Category::orderBy('id' , 'desc')->get();
         session()->flash('success' ,'Order has Placed successfully ');
         
         return redirect()->route('home');
    }
    
    
}
