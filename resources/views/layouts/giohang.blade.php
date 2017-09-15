@include('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center text-uppercase">Danh sách giỏ hàng của bạn</h2>
        <table class="table table-bordered table-responsive table-striped">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Hành động</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
            <form method="post" action="">
                {{csrf_field()}}
                @foreach($content as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td><img src="{!! asset('/images/'.$product->options->img) !!}" width="70px"></td>
                        <td style="width: 100px"><input type="number" min="1" value="{{$product->qty}}" class="form-control qty">
                        </td>
                        <td><span><a class="btn btn-info update" id="{{$product->rowId}}"><i class="glyphicon glyphicon-refresh"></i></a></span><span> </span><span><a href="{{route('xoasanpham',['id'=>$product->rowId])}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></span></td>
                        <td><?=number_format($product->price,0,'','.')?></td>
                        <td><?=number_format($product->qty * $product->price,0,'','.')?></td>
                    </tr>
                @endforeach
            </form>
        </table>
        <div class="row">
            <div class="col-sm-6">
                <span><a href="{{route('index')}}" class="btn btn-info"><i class="glyphicon glyphicon-hand-left"></i> Tiếp tục mua hàng</a></span>
                <span><a href="{{route('thanhtoan')}}" class="btn btn-info"><i class="glyphicon glyphicon-usd"></i> Thanh toán</a></span>
            </div>
            <div class="col-sm-6">
                <div class="bg bg-info" style="padding: 10px 20px"><h2>Tổng tiền : {!! $total !!} VNĐ</h2></div>
            </div>
        </div>
    </div>
    <script src="/js/giohang.js"></script>
    <br>
    @include('layouts.footer')

</body>
</html>