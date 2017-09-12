@include('layouts/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chi tiết sản phẩm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="/css/css/trangchitiet.css">
</head>
<body>
<div class="container-fluid">
    <div class="row" >
        <div class="col-sm-1">
            <div class="list-group" style="position: fixed">
                <a href="#tskt" class="list-group-item" style="text-align: center">
                    <i class="glyphicon glyphicon-stats"></i><br>Thông số</a>
                <a href="#anh" class="list-group-item" style="text-align: center">
                    <i class="glyphicon glyphicon-picture"></i><br>Hình Ảnh</a>
                <a href="#chungchi" class="list-group-item" style="text-align: center">
                    <i class="glyphicon glyphicon-list"></i><br>Chứng Chỉ</a>
                <a href="#lienhe" class="list-group-item" style="text-align: center">
                    <i class="glyphicon glyphicon-hand-down"></i><br>Liên Hệ</a>
            </div>
        </div>
        <div class="col-sm-10 clearfix">
            <div class="row">
                <div class="col-sm-6" id="anh">
                    <ul class="bxslider">
                        <li><img src="/images/{{$product->image}}" /></li>
                        <li><img src="/images/{{$product->image}}" /></li>
                        <li><img src="/images/{{$product->image}}" /></li>
                        <li><img src="/images/{{$product->image}}" /></li>
                        <li><img src="/images/{{$product->image}}" /></li>

                    </ul>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="row">
                        <div class="col-sm-12" style="background-color: black; color: white">
                            <div class="col-sm-12" style="margin: 20px">
                                <h2>{{$product->name}}</h2>
                            </div>
                            <div class="col-sm-8">
                                Giá : <span><strong>{{$product->cost}}</strong></span>
                            </div>
                            <div class="col-sm-4">
                                <i class="glyphicon glyphicon-check"></i><span> Còn hàng</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6" style="background-color: red; color: white; padding: 15px; border-radius: 5px">
                            <span class="glyphicon glyphicon-shopping-cart" style="font-size: 30px; padding: 5px;"></span>
                            <span style="font-size: 25px"><strong>Đặt Mua Ngay</strong></span>
                        </div>
                        <div class="col-sm-6" style="background-color: #2e6da4; color: white; padding: 15px; border-radius: 5px">
                            <span class="glyphicon glyphicon-phone" style="font-size: 32px; padding: 5px;"></span>
                            <span style="font-size: 20px"><strong>Tư Vấn: 0167.6385</strong></span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12" style="background-color: #f29901; padding: 10px">
                            <div>
                                <p class="text-center">Đặt Hàng Ngay</p>
                                <p class="text-center">Để lại số điện thoại, chúng tôi sẽ gọi lại ngay</p>
                            </div>
                            <form>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label class="sr-only" for="sdt">Số Điện Thoại</label>
                                        <input class="form-control" type="text" name="sdt" id="sdt" placeholder="Nhập số điện thoại để đặt hàng trước">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="sr-only" for="nhapsdt">Gửi Sđt</label>
                                        <button type = "submit" class = "btn btn-default btn-lg" id="nhapsdt" ><strong>Gửi</strong></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h3>Thông Số Kỹ Thuật</h3>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover" id="tskt">
                                <tbody>
                                <tr>
                                    <td style="background-color: #ededed">Nhãn Hiệu</td>
                                    <td>{{$product->branch->name}}</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Xuất Xứ</td>
                                    <td>Thụy Sỹ</td>
                                </tr>

                                <tr>
                                    <td style="background-color: #ededed">Kiểu Máy</td>
                                    <td>Automatic</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Đồng Hồ Dành Cho</td>
                                    <td>Đồng Hồ Nam</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Kích Cỡ</td>
                                    <td>43mm</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Chất Liệu Vỏ</td>
                                    <td>Thép không gỉ 316L/Mạ PVD</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Chất Liệu Dây</td>
                                    <td>Dây Sắt</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Chất Liệu Kính</td>
                                    <td>Kính Cứng</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Độ Chịu Nước</td>
                                    <td>30m</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Chức Năng Khác</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Bảo Hiểm</td>
                                    <td>5 năm chuẩn Thụy Sĩ</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #ededed">Bảo Hành Quốc Tế</td>
                                    <td>1 năm</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="chungchi">
                <div class="col-sm-12">
                    <img src="../images/trangchitiet/banner-xwatch-chuyen-gia-tham-dinh-dong-ho-1.jpg" alt="banner" width="100%">
                    <img src="../images/trangchitiet/giay-chung-nhan-phan-phoi-orient.jpg" width="100%" alt="giaychungnhan">
                </div>
            </div>
        </div>
    </div>
</div>
{{--<script src="/js/trangchitiet.js"></script>--}}
<div id="lienhe"></div>
@include('layouts.footer')

<script>
    $('.bxslider').bxSlider({
        buildPager: function(slideIndex){
            switch(slideIndex){
                case 0:
                    return '<img src="/images/{{$product->image}}" />';
                case 1:
                    return '<img src="/images/{{$product->image}}" />';
                case 2:
                    return '<img src="/images/{{$product->image}}" />';
                case 3:
                    return '<img src="/images/{{$product->image}}" />';
                case 4:
                    return '<img src="/images/{{$product->image}}" />';
            }
        }
    });
</script>
</body>


</html>