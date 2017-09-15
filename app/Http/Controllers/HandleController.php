<?php

namespace App\Http\Controllers;

use App\Product;
use \Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HandleController extends Controller
{
    public function muahang($id){
        $product = Product::find($id);
        Cart::add(array('id'=>$id, 'name'=>$product->name, 'qty'=>1, 'price'=>$product->cost, 'options'=>['img'=>$product->image]));
        $content = Cart::content();
        return redirect()->action('HandleController@giohang');
    }

    public function giohang(){
        $content = Cart::content();
        $total = Cart::total();
        return view('layouts.giohang',compact('content','total'));
    }

    public function xoasanpham($id){
        Cart::remove($id);
        return redirect()->action('HandleController@giohang');
    }

    public function thanhtoan(){
        return view('layouts.formthanhtoan');
    }

    public function chotdonhang(){
        return "abc";
    }

    public function capnhat(){
        if(\Illuminate\Support\Facades\Request::ajax()){
            $id = \Illuminate\Support\Facades\Request::get('id');
            $qty = \Illuminate\Support\Facades\Request::get('qty');
            Cart::update($id,$qty);
            echo "oke";
        }
    }
}
        