@extends('order.master')

@section('content')
    <h2 class="text-center">Danh sách đơn đặt hàng</h2>
    <table class="table table-responsive table-bordered table-striped">
        <tr>
            <th>STT</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ giao hàng</th>
            <th>Tình trạng</th>
            <th>Ngày đặt hàng</th>
            <th>Tổng tiền</th>
            <th>Hành động</th>

        </tr>

        @foreach($orders as $key=>$order)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$order->nameCustomer}}</td>
                <td>{{$order->emailCustomer}}</td>
                <td>{{$order->phoneCustomer}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->totalCost}}</td>
                <td><span><a href="{{route('view',['id'=>$order->id])}}"><i class="glyphicon glyphicon-eye-open"> </i> </a></span>
                <span> <a href="{{route('edit',['id'=>$order->id])}}"><i class="glyphicon glyphicon-edit"> </i> </a></span>
                <span> <a href="{{route('delete',['id'=>$order->id])}}"><i class="glyphicon glyphicon-trash"> </i> </a></span>
                </td>
            </tr>
        @endforeach
    </table>
@endsection