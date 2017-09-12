@include('layouts/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loại hàng</title>
    <link rel="stylesheet" type="text/css" href="/css/css/style%20danhmuc.css">
</head>
<body>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <h3>DANH MỤC SẢN PHẨM</h3>
                <div class="menu">
                    <ul>
                        <li>1.1. Đồng hồ Epos Swiss</li>
                        <li>1.2. Đồng hồ Bruno Sohnle Glashutte</li>
                        <li>1.3. Đồng hồ Tourbillon Memorigin</li>
                        <li>1.4. Đồng hồ Stuhrling Tourbillon</li>
                        <li>1.5. Đồng hồ Stuhrling Original Swiss</li>
                        <li>1.6. Đồng hồ Jacques Lemans</li>
                        <li>1.7. Đồng hồ Aries Gold</li>
                        <li>1.8. Đồng hồ Jacques Lemans</li>
                        <li>1.9. Đồng hồ Casio</li>
                        <li>1.10. Đồng hồ QQ</li>
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
                <h3>LOẠI DÂY</h3>
                <div class="menu">
                    <ul>
                        <li>4.1. Dây da</li>
                        <li>4.2. Thép không gỉ</li>
                        <li>4.3. Mạ vàng</li>
                        <li>4.4. Mạ đồng</li>
                        <li>4.5. Cao su</li>
                        <li>4.6. Dây nhựa</li>
                        <li>4.7. Dây vải, dù</li>
                    </ul>
                </div>
                <h3>LOẠI VỎ</h3>
                <div class="menu">
                    <ul>
                        <li>5.1. Thép không gỉ</li>
                        <li>5.2. Mạ vàng</li>
                        <li>5.3. Vàng nguyên khối</li>
                        <li>5.4. Mạ đồng</li>
                        <li>5.5. Cao su</li>
                        <li>5.6. Vỏ nhựa</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 donghonam">
                <h1>ĐỒNG HỒ NAM</h1>
                <form>
                    <select name="Chon" style="float: left; margin-left: 762px; margin-top: 3px; margin-bottom: 1px">
                        <option value="AZ" selected>---Sắp xếp theo---</option>
                        <option value="AZ">Thứ tự chữ cái A-Z</option>
                        <option value="ZA">Thứ tự chữ cái Z-A</option>
                        <option value="DateA">Theo ngày gần đây nhất</option>
                        <option value="DateZ">Theo ngày xa nhất</option>
                        <option value="PriceMax">Theo giá tăng dần</option>
                        <option value="PriceMin">Theo giá giảm dần</option>
                    </select>
                </form>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1492020025diamon.jpg">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Diamond<br>16-23558-277</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">28.830.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1492020334bruno.jpg">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Bruno sohnle<br>17-13158-241</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">13.830.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1491841939atlantic.jpg">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Atlantic<br>50351.45.11</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">12.780.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1491763434citizen-ny4051-51e.jpg">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Epos Swiss<br>3420.156.22.20.32</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">59.700.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1491763434citizen-ny4051-51e.jpg">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Citizen<br>NH8350-83L</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">5.250.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1491882623mtp-1302d.jpg">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Stuhrling Tourbilion<br>ST-144L.3245E2T</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">8.491.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1491763867stuhrling-original-tourbillon.png">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Tourbillon Memorigin 8668</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">168.000.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1491757567dong-ho-doi-citizen-bm6772-05aew1582-03a.jpg">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Tourbillon Memorigin 15556V</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">55.000.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="pic">
                            <img src="../images/1491841939atlantic.jpg">
                            <div class="effect">
                                <div class="info">
                                    <p style="text-align: center">Đồng hồ Stuhrling Original Tourbillon 541.333X2</p><br>
                                    <p style="text-align: center; color: orange; font-weight: bold">63.830.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts/footer')
</body>
</html>