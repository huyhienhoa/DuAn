<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $branches = Branch::all();
        $productsHot = Product::where('hot', 1)->take(10)->get();
        $productsForMen = Product::where('category_id', 1)->orderBy('created_at', 'desc')->take(5)->get();
        $productsForLady = Product::where('category_id', 2)->orderBy('created_at', 'desc')->take(5)->get();
        $productsForPair = Product::where('category_id', 3)->orderBy('created_at', 'desc')->take(5)->get();
        return view('layouts.index', compact('branches', 'productsHot', 'productsForMen', 'productsForLady', 'productsForPair'));
    }

    public function chitietsanpham($id)
    {
        $product = Product::find($id);
        return view('layouts.chitietsanpham', compact('product'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id','=',$id)->get();
        $branches = Branch::all();
        return view('layouts.category', compact('category','products', 'branches'));
    }

    public function branch($id)
    {
        $branches = Branch::find($id);
        $products = Product::where('branch_id','=',$id)->get();
        $thuonghieus = Branch::all();

        return view('layouts.branch', compact('category','products', 'branches','thuonghieus'));
    }

    public function login()
    {
        return view('home');
    }
}
