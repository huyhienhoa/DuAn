@extends('order.master')
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
                                <label>Địa chỉ giao hàng</label>
                                <input type="text" name="address" class="form-control" value="{{$order->address}}">
                        </div>
                        <div class="col-md-3">
                                <label>Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" value="{{$order->phoneCustomer}}">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                <label>Ghi chú của khách hàng</label><br>
                                <textarea name="note" rows="5"  class="form-control">{{$order->note}}</textarea>
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-4 col-md-offset-3">
                                <label>Tình trạng</label><br>
                                <select class="form-control" name="status">
                                        <option value="đang vận chuyển" <?=($order->status == "đang vận chuyển")?'selected':''?>>Đang vận chuyển</option>
                                        <option value="đã giao hàng" <?=($order->status == "đã giao hàng")?'selected':''?>>Đã giao hàng</option>
                                        <option value="hủy bỏ" <?=($order->status == "hủy bỏ")?'selected':''?>>Hủy bỏ</option>
                                </select>
                        </div>
                </div>

        </form>
@endsection