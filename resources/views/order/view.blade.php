@extends('order.master')

{{--{{dd($orderDetail)}}--}}

@section('content')

    <h2>Chi tiết đơn hàng số {{$orderDetail[0]->order_id}}</h2>
    <table class="table table-bordered table-responsive table-striped">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>

    @foreach($orderDetail as $product)
        <tr>
            <td>{{$product->product->name}}</td>
            <td>{{number_format($product->product->cost,0,',','.')}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{number_format($product->quantity*$product->product->cost,0,',','.')}}</td>
        </tr>
    @endforeach
    </table>
@endsection