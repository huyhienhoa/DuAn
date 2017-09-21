<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Product_Order;
use \Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function capnhat(){
        if(\Illuminate\Support\Facades\Request::ajax()){
            $id = \Illuminate\Support\Facades\Request::get('id');
            $qty = \Illuminate\Support\Facades\Request::get('qty');
            Cart::update($id,$qty);
            echo "oke";
        }
    }


    public function thanhtoan(){
        return view('layouts.formthanhtoan');
    }

    public function chotdonhang(Request $request){


        $email = $request->input('email');
        $donhang = new Order();
        $donhang->nameCustomer = $request->input('name');
        $donhang->emailCustomer = $email;
        $donhang->address = $request->input('address');
        $donhang->phoneCustomer = $request->input('phone');
        $donhang->note = $request->input('note');
        $donhang->status = "đang vận chuyển";
        $donhang->totalCost = (Cart::total());
        $donhang->save();

        foreach (Cart::content() as $product){
//            var_dump($product);exit;
            $donhangchitiet = new Product_Order();
            $donhangchitiet->product_id = $product->id;
            $donhangchitiet->order_id = $donhang->id;
            $donhangchitiet->quantity = $product->qty;
            $donhangchitiet->price = $product->price;
            $donhangchitiet->save();
        }

        $data = ['content'=>Cart::content(),'total'=>Cart::total()];

        Mail::send('mails.order',$data,function ($message) use ($email){
            $message->from('huyhienhoactn@gmail.com','2H1M Watch');
            $message->to($email)->subject('Đơn hàng của bạn tại 2H1M Watch');
        });


//        Cart::instance('wishlist')->store($name);
        Cart::destroy();
        echo "<script>
                alert('Cảm ơn bạn đã đặt hàng. Nhân viên của chúng tôi sẽ liên lạc với bạn sau ít phút nữa. Bạn có thể check lại đơn hàng của bạn trong Email !');
                window.location ='".url('/index')."'
               </script>";

        
    }




}
        