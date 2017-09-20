@include('layouts/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loại hàng</title>
    <link rel="stylesheet" type="text/css" href="/css/css/style%20danhmuc.css">
</head>
<body>
<?//=var_dump($products);exit;?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <h3>DANH MỤC SẢN PHẨM</h3>
                <div class="menu">
                    <ul>
                        @foreach($branches as $key => $branch)
                        <a href="{{route('branch',['id'=>1])}}"><li><a href="{{route('branch',['id'=>$branch->id])}}">1.<?=$key+1; ?>. {{$branch->name}}</a></li>
                        </a>
                        @endforeach
                    </ul>
                </div>
                <h3>KHOẢNG GIÁ THÀNH</h3>
                <div class="menu">
                    <ul>
                        <li>2.1. Giá dưới 5 triệu</li>
                        <li>2.2. Giá từ 5-10 triệu</li>
                        <li>2.3. Giá từ 10-20 triệu</li>
                        <li>2.4. Giá từ 20-50 triệu</li>
                        <li>2.5. Giá trên 50 triệu</li>
                    </ul>
                </div>
                <h3>NĂNG LƯỢNG</h3>
                <div class="menu">
                    <ul>
                        <li>3.1. Đồng hồ cơ</li>
                        <li>3.2. Đồng hồ điện tử</li>
                    </ul>
                </div>
                {{--<h3>LOẠI DÂY</h3>--}}
                {{--<div class="menu">--}}
                    {{--<ul>--}}
                        {{--<li>4.1. Dây da</li>--}}
                        {{--<li>4.2. Thép không gỉ</li>--}}
                        {{--<li>4.3. Mạ vàng</li>--}}
                        {{--<li>4.4. Mạ đồng</li>--}}
                        {{--<li>4.5. Cao su</li>--}}
                        {{--<li>4.6. Dây nhựa</li>--}}
                        {{--<li>4.7. Dây vải, dù</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<h3>LOẠI VỎ</h3>--}}
                {{--<div class="menu">--}}
                    {{--<ul>--}}
                        {{--<li>5.1. Thép không gỉ</li>--}}
                        {{--<li>5.2. Mạ vàng</li>--}}
                        {{--<li>5.3. Vàng nguyên khối</li>--}}
                        {{--<li>5.4. Mạ đồng</li>--}}
                        {{--<li>5.5. Cao su</li>--}}
                        {{--<li>5.6. Vỏ nhựa</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 donghonam">
                <h1 class="text-uppercase">{{$category->name}}</h1>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <a href="{{route('chitietsanpham',['id'=>$product->id])}}">
                            <img src="../images/{{$product->image}}" width="268px" height="327px">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">{{$product->name}}</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">{{$product->cost}} VNĐ</p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@include('layouts/footer')
</body>
</html>