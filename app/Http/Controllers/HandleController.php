<?php

namespace App\Http\Controllers;

use App\Product;
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
        $data = ['content'=>Cart::content(),'total'=>Cart::total()];
//        var_dump($data);exit;
        Mail::send('mails.order',$data,function ($message) use ($email){
            $message->from('huyhienhoactn@gmail.com','2H1M Watch');
            $message->to($email)->subject('Đơn hàng của bạn tại 2H1M Watch');
        });
        Cart::destroy();
        echo "<script>
                alert('Cảm ơn bạn đã đặt hàng. Nhân viên của chúng tôi sẽ liên lạc với bạn sau ít phút nữa. Bạn có thể check lại đơn hàng của bạn trong Email!');
                window.location ='".url('/index')."'
               </script>";

        
    }


}
        