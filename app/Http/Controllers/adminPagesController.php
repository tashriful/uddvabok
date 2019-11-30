<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User; 
use App\Category;
use App\Order;
use App\Supplier;

class adminPagesController extends Controller
{
     public function __construct(){
        
        $this->middleware('auth:admin');
    }
    
    
    public function index(){
        
        return view('admin.pages.index');
    }
    
    public function userAdd(){
        
        return view('admin.pages.userAdd');
    }
    
    public function userCreate(Request $request){
        
        $user = new User();
        $user->category = $request->category;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
        
        return redirect()->route('admin.userAdd');
        
        
    }
    
    public function adminShow(){
        
        $stdList = User::all();
    	return view('admin.pages.adminShow', ['std'=> $stdList]);
    }
    
    public function resellerShow(){
        
        $stdList = User::all();
    	return view('admin.pages.resellerShow', ['std'=> $stdList]);
    }
    
    public function supplierShow(){
        
        $stdList = Supplier::all();
    	return view('admin.pages.supplierShow', ['std'=> $stdList]);
    }
    
    
    public function order(){
        
        $stdList = Order::all();
    	return view('admin.pages.order', ['order'=> $stdList]);
    }
    
    public function orderShow($id){
        
        $order = Order::where('id' , $id)->first();
         return view('admin.pages.orderShow')->with('order' , $order);
        
        
    }
    
    public function paid($id){
        
        $order = Order::find($id);
        if($order->is_paid){
            $order->is_paid = 0;
        }
        else{
            $order->is_paid = 1;
        }
        $order->save();
        session()->flash('success' , 'Order Payment Status Changed');
        
         return back();
        
        
    }
    
    public function account(){
         $order = Order::orderBy('id' , 'desc')->get();
        
        
        return view('admin.pages.account')->with('order' , $order);
        
    }
     public function supplierEdit($id){
        
       $std = Supplier::find($id);
		return view('admin.pages.supplierEdit', ['std'=>$std]);
    }
    
    public function resellerEdit($id){
        
       $std = User::find($id);
		return view('admin.pages.resellerEdit', ['std'=>$std]);
    }
    
    public function supplierUpdate(Request $request , $id){
        
        $supplier = Supplier::find($id);
        $supplier->business_category = $request->bcategory;
        $supplier->company_name = $request->cname;
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->number = $request->number;
        $supplier->address = $request->address;
        $supplier->status = $request->status;
        $supplier->username = $request->username;
        $supplier->password = $request->password;
        $supplier->save();
        return redirect()->route('admin.supplierShow');
		
    }
    
    public function resellerUpdate(Request $request , $id){
        
        $user = User::find($id);
        $user->business_category = $request->bcategory;
        $user->company_name = $request->cname;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = $request->address;
        $user->status = $request->status;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();
        session()->flash('success' ,'Reseller has Updated successfully ');
        return redirect()->route('admin.resellerShow');
		
    }
    
    public function resellerDelete($id){
        
       $std = User::find($id);
        $std->delete();
        session()->flash('success' ,'Reseller has deleted successfully ');
        
		 return back();
    }
    
    public function supplierDelete($id){
        
       $std = Supplier::find($id);
        $std->delete();
        session()->flash('success' ,'Supplier has deleted successfully ');
        
		 return back();
    }
    
    public function remove($id){
        
       $std = User::find($id);
		 $std->delete();
		return view('admin.pages.adminShow');
    }
    
     public function productAdd(){
         
         $category = Category::orderBy('id' , 'desc')->get();
        
        
        return view('admin.pages.productAdd')->with('category' , $category);
    }
    
    public function profile(){
        
        $stdList = User::all()->where('category', 'Admin');
    	return view('admin.pages.profile', ['std'=> $stdList]);
    }
    
    
    
    
    
}
