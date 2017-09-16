<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/css/jquery.bxslider.css">
    <link href="/css/css/bootstrap-theme.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/css/style.css">
    <link type="text/css" rel="stylesheet" href="/css/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="/css/css/hover.css" rel="stylesheet" type="text/css">
    <script src="/js/jquery-3.2.1.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <script src="/js/index.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center text-uppercase">Danh sách sản phẩm bạn đã đặt mua</h2>
    <table class="table table-bordered table-responsive table-striped">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        @foreach($content as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td><img src="{!! asset('/images/'.$product->options->img) !!}" width="70px"></td>
                <td>{{$product->qty}}</td>
                <td><?=number_format($product->price,0,'','.')?></td>
                <td><?=number_format($product->qty * $product->price,0,'','.')?></td>
            </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-sm-6">
            <div class="bg bg-info" style="padding: 10px 20px"><h2>Tổng tiền : {!!$total !!} VNĐ</h2></div>
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