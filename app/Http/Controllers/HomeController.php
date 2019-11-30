<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $products = product::orderBy('id' , 'desc')->get();
        $category = Category::orderBy('id' , 'desc')->get();
        return view('home.pages.index')->with('products' , $products)->with('category' , $category);
    }
    
    public function categoryProduct($id){
        
       $std = product::where('category_id', $id)->get();
        //$cat = Category::find($std->category_id);
        $category = Category::orderBy('id' , 'desc')->get();
        return view('home.pages.categoryProduct')->with('products' , $std)->with('category' , $category);
    }
	
	public function details($id){
        
       $std = product::where('id' , $id)->first();
        $category = Category::orderBy('id' , 'desc')->get();
         return view('home.pages.productShow')->with('product' , $std)->with('category' , $category);
    }
}
