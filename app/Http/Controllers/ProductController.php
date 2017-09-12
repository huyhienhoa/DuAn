<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Category;
use App\Image;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct(){
        $products = Product::with('category','branch')->get();
        return view('product.products',compact('products'));
    }

    public function showAddForm(){
        $categories = Category::all();
        $branches = Branch::all();
        return view('product.addproduct',compact('categories','branches'));
    }
    
    
    
    public function createProduct(Request $request){
        $product = new Product();
        $product->name = $request->input('name');
        $product->cost = $request->input('cost');
        $product->quantity = $request->input('quantity');
        $product->status = $request->input('hot');
        $product->category_id = $request->input('category');
        $product->branch_id = $request->input('branch');
        $product->hot = $request->input('hot');
        $product->betterSale = $request->input('betterSale');
        $product->descriptionSummary = $request->input('descriptionSummary');
        $product->description = $request->input('description');
        
        if($request->hasFile('product_image')){
            $file = $request->product_image;

            $file->move('images',$file->getClientOriginalName());

            $product->image = $file->getClientOriginalName();
            $product->save();
        }
        else{
            return view('errors.noImage');
        }
        
        return redirect()->action('ProductController@listProduct');
    }



    public function showDeleteForm($id){
        $product = Product::find($id);
        $category = Category::find($product['category_id']);
        $branch = Branch::find($product['branch_id']);
        return view('product.delete',['product'=>$product,'category'=>$category,'branch'=>$branch]);
    }
    
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
//        $request->session()->flash('success','Đã xóa thành công');
        return redirect()->action('ProductController@listProduct');
    }


    public function showUpdateForm($id){
        $product = Product::find($id);
        $categories = Category::all();
        $branches = Branch::all();
        return view('product.update',compact('product','categories','branches'));
    }
    
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->cost = $request->input('cost');
        $product->quantity = $request->input('quantity');
        $product->status = $request->input('hot');
        $product->category_id = $request->input('category');
        $product->branch_id = $request->input('branch');
        $product->hot = $request->input('hot');
        $product->betterSale = $request->input('betterSale');
        $product->descriptionSummary = $request->input('descriptionSummary');
        $product->description = $request->input('description');

        if($request->hasFile('image')){
            $file = $request->image;

            $file->move('images',$file->getClientOriginalName());

            $product->image = $file->getClientOriginalName();
            $product->save();
        }
        else{
            return view('errors.noImage');
        }

        return redirect()->action('ProductController@listProduct');
    }
}
