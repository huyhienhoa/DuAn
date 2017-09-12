<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.index');
    }
    
    public function chitietsanpham($id){
        $product = Product::find($id);
        return view('layouts.chitietsanpham',compact('product'));
    }


    public function category($id){
        $category = Category::find($id);
        return view('layouts.category',compact('category'));
    }
}
