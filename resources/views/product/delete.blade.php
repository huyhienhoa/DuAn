<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

</head>
<body>
<div class="container ">
    <h1 class="text-center text-danger">Xóa sản phẩm</h1>
    <form class="form-group" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="alert alert-danger">Bạn có thực sự muốn xóa sản phẩm này này ?</p>
                <div>
                    <button type="submit" class="btn btn-danger">Xóa</button>
                    <a href="{{route('products')}}" class="btn btn-success">Hủy bỏ</a>
                </div>
            </div>
        </div>
        <br>
        {{--enctype="multipart/form-data"--}}
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <label for="name">Tên sản phẩm</label>
                <input class="form-control" id="name" type="text" placeholder="nhập tên sản phẩm..." name="name" value="{{$product->name}}" disabled>
            </div>
            <div class="col-md-3">
                <label for="category">Loại hàng</label>
                <select class="form-control" id="category" name="category" disabled>
                        <option value="{{$category->id}}">{{$category->name}}</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="branch">Thương hiệu</label>
                <select class="form-control" id="branch" name="branch" disabled>
                        <option value="{{$branch->id}}">{{$branch->name}}</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <label for="cost">Đơn giá
                </label>
                <input type="number" name="cost" id="cost" class="form-control" min="1" value="{{$product->cost}}" disabled>
            </div>
            <div class="col-md-2">
                <label for="quantity">Số lượng
                </label>
                <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="{{$product->quantity}}" disabled >
            </div>
            <div class="col-md-2">
                <label for="status">Tình trạng</label>
                <select class="form-control" id="status" disabled>
                    <option><?=($product['status'] == "còn hàng")?"Còn hàng":"Hết hàng"?></option>

                </select>
            </div>
            <div class="col-md-2">
                <label for="hot">Nổi bật</label>
                <select class="form-control" id="hot" name="hot" disabled>
                    <option><?=($product['hot'] == 1)?"Nổi bật":"Không nổi bật"?></option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="betterSale">Bán chạy</label>
                <select class="form-control" id="betterSale" name="betterSale" disabled>
                    <option><?=($product['betterSale'] == 1)?"Bán chạy":"Không bán chạy"?></option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <label for="images">Hình ảnh
                </label>
                <img src="/images/{{$product->image}}" width="200px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <label for="descriptionSummary">Mô tả ngắn gọn</label>
                <textarea class="form-control" rows="5" id="descriptionSummary" name="descriptionSummary" disabled>{{$product->descriptionSummary}}</textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                {{--<script>--}}
                {{--CKEDITOR.replace( 'article-ckeditor' );--}}
                {{--</script>--}}
                <label for="description">Mô tả chi tiết</label>
                <textarea id="description" name="description" rows="7" class="form-control ckeditor" placeholder="mô tả sản phẩm..." disabled>{{$product->description}}</textarea>
            </div>
        </div>
        <br>

    </form>
</div>
</div>
</body>
</html>