@include('layouts.header')

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>

</head>
<body>

<div class="slider container">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 navbar-vertical">
            <ul>
                @foreach($branches as $branch)
                    <li><img src="../images/{{$branch->image}}" class="brand"><a href="{{route('branch',['id'=>$branch->id])}}">{{$branch->name}}</a></li>
                @endforeach


            </ul>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
            <ul class="bxslider1">
                <li><a href="#"><img src="../images/banner.png"></a></li>
                <li><a href="#"><img src="../images/thiennhien1.jpg"></a></li>
                <li><a href="#"><img src="../images/thiennhien2.jpg"></a></li>
                <li><a href="#"><img src="../images/thiennhien3.jpg"></a></li>
                <li><a href="#"><img src="../images/thiennhien4.jpg"></a></li>
            </ul>
        </div>
    </div>

</div>

<h2 class="font-lobster text-center color-title">SẢN PHẨM NỔI BẬT </h2>
<div class="container-fruid text-center">
    <div class="sanphamnoibat">
        <div class="slide-sanphamnoibat">
            @foreach($productsHot as $product)
                <a href="{{route('chitietsanpham',['id'=>$product->id])}}"><div class="slider hvr-buzz">
                        <img src="../images/<?=$product['image']?>" title="<?=$product['name'];echo "<br>"; echo number_format($product['cost'],'0','','.')?>">
                    </div></a>
            @endforeach
        </div>
    </div>
</div>


<h2 class="font-lobster text-center"><a href="{{route('category',['id'=>1])}}">ĐỒNG HỒ NAM</a> </h2>
<div class="container-fruid text-center">
    <div class="sanphamnoibat">
        <div class="slide-sanphamnoibat">

            @foreach($productsForMen as $product)
                <a href="{{route('chitietsanpham',['id'=>$product->id])}}"><div class="slider hvr-buzz">
                        <img src="../images/<?=$product['image']?>" title="<?=$product['name'];echo "<br>"; echo number_format($product['cost'],'0','','.')?>">
                    </div></a>
            @endforeach

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h2 class="font-lobster text-center color-title">HƠN 1 TRIỆU KHÁCH HÀNG TIN TƯỞNG, TẠI SAO ??? </h2>
        <hr>
    </div>
    <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1 hvr-pulse-shrink">
                    <img src="../images/icon-s1.png">
                    <h6>TIẾT KIỆM HƠN</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Chúng tôi cung cấp sản phẩm chất lượng ,chính hãng với giá cạnh tranh nhất trên toàn quốc
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1 hvr-pulse-shrink">
                    <img src="../images/icon-s2.png" >
                    <h6>VẬN CHUYỂN NHANH</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Với hơn 100 cửa hàng chi nhánh trên cả nước, chúng tôi cam kết chuyển hàng nhanh chóng.
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1 hvr-pulse-shrink">
                    <img src="../images/icon-s6.png">
                    <h6>THANH TOÁN AN TOÀN</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Chấp nhận thanh toán với những phương thức an toàn và phổ biến nhất thế giới.
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1 hvr-pulse-shrink">
                    <img src="../images/icon-s3.png">
                    <h6>TỰ TIN MUA SẮM</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Người mua được bảo mật thông tin tuyệt đối khi mua hàng tại website.
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1 hvr-pulse-shrink">
                    <img src="../images/icon-s4.png">
                    <h6>HỖ TRỢ 24/7</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Đội ngũ tư vấn giàu kinh nghiệm, luôn sẵn lòng giải đáp mọi thắc mắc cho bạn.

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1 hvr-pulse-shrink">
                    <img src="../images/icon-s5.png">
                    <h6>TẢI WEB APP</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Tải ứng dụng và ngắm nhìn vương quốc đồng hồ trong tầm tay của bạn.
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>

<h2 class="font-lobster text-center"><a href="{{route('category',['id'=>2])}}">ĐỒNG HỒ NỮ</a> </h2>
<div class=" container-fruid text-center">
    <div class="sanphamnoibat">
        <div class="slide-sanphamnoibat">
            @foreach($productsForLady as $product)
                <a href="{{route('chitietsanpham',['id'=>$product->id])}}"><div class="slider hvr-buzz">
                        <img src="../images/<?=$product['image']?>" title="<?=$product['name'];echo "<br>"; echo number_format($product['cost'],'0','','.')?>">
                    </div></a>
            @endforeach
        </div>
    </div>
</div>

<h2 class="font-lobster text-center"><a href="{{route('category',['id'=>3])}}">ĐỒNG HỒ ĐÔI</a> </h2>
<div class="container-fruid text-center">
    <div class="sanphamnoibat">
        <div class="slide-sanphamnoibat">
            @foreach($productsForPair as $product)
                <a href="{{route('chitietsanpham',['id'=>$product->id])}}"><div class="slider hvr-buzz">
                        <img src="../images/<?=$product['image']?>" title="<?=$product['name'];echo "<br>"; echo number_format($product['cost'],'0','','.')?>">
                    </div></a>
            @endforeach
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h2 class="font-lobster text-center color-title">KHÁCH HÀNG NÓI GÌ VỀ 2H1MWATCH ??? </h2>
        <hr>
    </div>
    <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1">
                    <img src="../images/orackobama.jpg" class="customer hvr-grow-shadow">
                    <h6>Orack Obama</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Sản phẩm rất chất lượng, tôi hoàn toàn hài lòng và yên tâm khi mua sắm tại nơi này.
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1">
                    <img src="../images/donaltrump.JPG" class="customer hvr-grow-shadow">
                    <h6>Donal Trump</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Sau nhiều ngày tìm kiếm, đắn đo để tìm cửa hàng bán đồng hồ uy tín, cuối cùng tôi đã chọn 2H1MWatch, thật là một quyết định đúng đắn nhất của cuộc đời tôi.
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="row">
                <div class="col-xs-4 col-md-4 col-md-offset-1">
                    <img src="../images/putin.jpg" class="customer hvr-grow-shadow">
                    <h6>Vladimir Putin</h6>
                </div>
                <div class="col-xs-8 col-md-6">
                    <br>
                    Mại zo, mại zo, mua ngay mua ngay đi anh em, tôi mua ở đây rồi, hàng tại 2H1MWatch rất chất.
                </div>
            </div>
        </div>

    </div>

    <hr>
</div>

<div class="btn-top text-center"><i class="fa fa-chevron-up fa-2x"></i></div>
</body>
@include('layouts.footer')
</html>