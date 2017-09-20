@extends('layouts.app')
@section('content')
        <h2 class="text-center text-primary">Cập nhật đơn hàng</h2>
        <form method="post" class="form-group">
                {{csrf_field()}}
                <div class="row">
                        <div class="col-md-3 col-md-offset-3">
                                <label>Họ tên khách hàng</label>
                                <input type="text" name="name" class="form-control" value="{{$order->nameCustomer}}">
                        </div>
                        <div class="col-md-3">
                                <label>Email khách hàng</label>
                                <input type="email" name="email" class="form-control" value="{{$order->emailCustomer}}">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-3 col-md-offset-3">
                                <label>Tình trạng</label><br>
                                <select class="form-control" name="status">
                                        <option value="đang vận chuyển" <?=($order->status == "đang vận chuyển")?'selected':''?>>Đang vận chuyển</option>
                                        <option value="đã giao hàng" <?=($order->status == "đã giao hàng")?'selected':''?>>Đã giao hàng</option>
                                        <option value="hủy bỏ" <?=($order->status == "hủy bỏ")?'selected':''?>>Hủy bỏ</option>
                                </select>
                        </div>

                        <div class="col-md-3">
                                <label>Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" value="{{$order->phoneCustomer}}">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                <label>Địa chỉ giao hàng</label>
                                <input type="text" name="address" class="form-control" value="{{$order->address}}">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                <label>Ghi chú của khách hàng</label><br>
                                <textarea name="note" rows="5"  class="form-control">{{$order->note}}</textarea>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-10 col-md-offset-1"><h2>Chi tiết đơn hàng</h2></div>
                        <div class="col-md-10 col-md-offset-1">
                                <table class="table table-bordered table-responsive table-striped">
                                        <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Đơn giá</th>
                                                <th>Số lượng</th>
                                                <th>Hành động</th>
                                                <th>Thành tiền</th>
                                        </tr>
                                        <?php $tongtien = 0;?>
                                        <form method="post" action="">
                                                {{csrf_field()}}
                                        @foreach($orderDetail as $product)
                                                <tr>
                                                        <?php
                                                        $thanhtien = $product->quantity*$product->product->cost;
                                                        $tongtien +=$thanhtien;
                                                        ?>
                                                        <td>{{$product->product->name}}</td>
                                                        <td>{{number_format($product->product->cost,0,',','.')}}</td>
                                                        <td style="width: 100px"><input type="number" min="1" value="{{$product->quantity}}" class="form-control qty">
                                                        </td>
                                                        <td><span><a class="btn btn-info update" id="{{$product->quantity}}"><i class="glyphicon glyphicon-refresh"></i></a></span><span> </span><span><a href="{{route('xoasanpham',['id'=>$product->quantity])}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></span></td>
                                                        {{--<td>{{$product->quantity}}</td>--}}
                                                        <td>{{number_format($thanhtien,0,',','.')}}</td>
                                                </tr>
                                        @endforeach
                                        </form>
                                </table>
                                <div class="row text-right">
                                        <h2>Tổng tiền: {{number_format($tongtien,0,',','.')}} VNĐ</h2>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-offset-2">
                                <a href="{{route('orders')}}" class="btn btn-info"><i class="glyphicon glyphicon-hand-left"></i> Quay lại</a>
                                <button class="btn btn-info"><i class="glyphicon glyphicon-floppy-saved"></i> Lưu lại</button>
                        </div>
                </div>


        </form>
@endsection