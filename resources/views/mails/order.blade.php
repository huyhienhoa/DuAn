<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table{
            border-collapse: collapse;
        }
        tr,th,td{
            border: 1px solid #9a9a9a;
            text-align: center;
        }
        th,td{
            width: 150px;
        }
        .bg-info{
            background-color: #e9e9e9;
        }
        th{
            background-color: #e8dfff;
        }
        .col-sm-6{
            width: 50%;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center text-uppercase">Danh sách sản phẩm bạn đã đặt mua</h1>
    <table class="table table-bordered table-responsive table-striped">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        @foreach($content as $product)
            <tr>
                <td>{{$product->name}}</td>
{{--                <td><img src="{!! asset('/images/'.$product->options->img) !!}" width="70px"></td>--}}
                <td>{{$product->qty}}</td>
                <td><?=number_format($product->price,0,'','.')?></td>
                <td><?=number_format($product->qty * $product->price,0,'','.')?></td>
            </tr>
        @endforeach
    </table>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="bg bg-info" style="padding: 10px 20px"><h2>Tổng tiền : {!!number_format($total,0,',','.') !!} VNĐ</h2></div>
        </div>
    </div>
    <div class="row">
        <p>Bạn không cần phải thao tác gì thêm, nhân viên của chúng tôi sẽ sớm liên hệ với bạn để giao hàng cho bạn !</p>
        <p>Trân thành cảm ơn bạn !</p>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <span><a href="{{route('index')}}" class="btn btn-info"><i class="glyphicon glyphicon-hand-left"></i> Ghé thăm 2H1M Watch</a></span>
        </div>
    </div>
</div>
<script src="/js/giohang.js"></script>
<br>
</body>
</html>