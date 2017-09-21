@include('layouts.header')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thanh toán</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center text-uppercase">Thông tin khách hàng</h2>
        <form method="post" class="form-group">
            {{csrf_field()}}
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <label>Họ tên của bạn <span class="text-danger">*</span></label>
                    <input type="text" name="name" placeholder="Nhập chính xác tên của bạn" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <label>Email của bạn <span class="text-danger">*</span></label>
                    <input type="email" name="email" placeholder="Nhập email của bạn" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <label>Sđt của bạn <span class="text-danger">*</span></label>
                    <input type="text" name="phone" placeholder="Nhập chính xác sđt của bạn" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <label>Địa chỉ của bạn</label>
                    <input type="text" name="address" placeholder="Nhập địa chỉ của bạn" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <label>Ghi chú </label>
                    <textarea rows="5" name="note" class="form-control" placeholder="Nhập ghi chú của bạn"></textarea>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <label>Hình thức nhận hàng </label><br>
                    <input type="radio" checked> Nhận hàng-thanh toán (COD)

                </div>
            </div>
            <br>

            <div class="row">
                    <div class="col-sm-offset-3 col-sm-6">
                        <span><a href="{{route('index')}}" class="btn btn-info"><i class="glyphicon glyphicon-hand-left"></i> Tiếp tục mua hàng</a></span>
                        <span><button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-usd"></i> Thanh toán</button></span>
                    </div>
            </div>
            <br>
        </form>
    </div>
</body>
@include('layouts.footer')
{{--test--}}
</html>