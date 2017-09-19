@extends('order.master')


@section('content')

    <h2>Chi tiết đơn hàng :</h2>
    <table class="table table-bordered table-responsive table-striped">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
    <?php $tongtien = 0;?>
    @foreach($orderDetail as $product)
        <tr>
            <?php
                $thanhtien = $product->quantity*$product->product->cost;
                $tongtien +=$thanhtien;
            ?>

            <td>{{$product->product->name}}</td>
            <td>{{number_format($product->product->cost,0,',','.')}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{number_format($thanhtien,0,',','.')}}</td>
        </tr>
    @endforeach
    </table>
    <div class="row">
        <div class="col-sm-offset-6 col-sm-6">
            <h2>Tổng tiền: {{number_format($tongtien,0,',','.')}} VNĐ</h2>
        </div>
    </div>
@endsection