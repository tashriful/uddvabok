<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
     public function categoryShow(){
        
        $categories = Category::orderBy('id' , 'desc')->get();
        
        
        return view('admin.pages.categoryShow')->with('categories' , $categories);
    }
    
    public function categoryCreate(){
        
        
        
        return view('admin.pages.categoryCreate');
    }
    
     public function categoryAdd(Request $request){
        
         $validatedData = $request->validate([
        'name' => 'required',
            
    ]);
         
         
        $category = new Category();
        $category->name = $request->name;
        
        $category->save();
        
        return redirect()->route('admin.categoryCreate');
        
        
    }
}
