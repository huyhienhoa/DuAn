@extends('layouts.app')

@section('content')
    @if(session('update'))
        <div class="alert alert-success">
            {{session('update')}}
        </div>
    @endif
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
        {{--{{dd($content)}}--}}
        @foreach($orders as $key=>$order)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$order->nameCustomer}}</td>
                <td>{{$order->emailCustomer}}</td>
                <td>{{$order->phoneCustomer}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{number_format($order->totalCost,0,'','.')}}</td>
                <td><span><a href="{{route('view',['id'=>$order->id])}}"><i class="glyphicon glyphicon-eye-open"> </i> </a></span>
                    @if($order->status != "đã giao hàng")
                        <span> <a href="{{route('don-hang/edit',['id'=>$order->id])}}"><i class="glyphicon glyphicon-edit"> </i> </a></span>
                    @endif

                {{--<span> <a href="{{route('don-hang/delete',['id'=>$order->id])}}"><i class="glyphicon glyphicon-trash"> </i> </a></span>--}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
