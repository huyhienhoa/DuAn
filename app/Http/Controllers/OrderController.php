<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product_Order;
use \Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $content = Cart::all();
        $orders = Order::all();
        return view('order.list',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderDetail = Product_Order::all()->where('order_id',$id);
        return view('order.view',compact('orderDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $orderDetail = Product_Order::all()->where('order_id',$id);
        return view('order.update',compact('order','orderDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->nameCustomer = $request->input('name');
        $order->emailCustomer = $request->input('email');
        $order->address = $request->input('address');
        $order->phoneCustomer = $request->input('phone');
        $order->status = $request->input('status');
        $order->note = $request->input('note');
        $order->save();
        return redirect()->action('OrderController@index')->with('update','Bạn đã cập nhật đơn hàng thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $orderDetail = Product_Order::all()->where('order_id',$id);
        return view('order.update',compact('order','orderDetail'));
    }
    
    public function delete($id){
        
    }
}