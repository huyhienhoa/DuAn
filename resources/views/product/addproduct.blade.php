<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

</head>
<body>
<div class="container ">
    <h1 class="text-center text-danger">Thêm sản phẩm</h1>
        <form class="form-group" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
               <div class="col-md-4 col-md-offset-1">
                   <label for="name">Tên sản phẩm</label>
                   <input class="form-control" id="name" type="text" placeholder="nhập tên sản phẩm..." name="name">
               </div>
               <div class="col-md-3">
                   <label for="category">Loại hàng</label>
                   <select class="form-control" id="category" name="category">
                       @foreach($categories as $category)
                           <option value="{{$category->id}}">{{$category->name}}</option>
                       @endforeach
                   </select>
               </div>
               <div class="col-md-3">
                   <label for="branch">Thương hiệu</label>
                   <select class="form-control" id="branch" name="branch">
                       @foreach($branches as $branch)
                           <option value="{{$branch->id}}">{{$branch->name}}</option>
                       @endforeach
                   </select>
               </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <label for="cost">Đơn giá
                    </label>
                    <input type="number" name="cost" id="cost" class="form-control" min="1">
                </div>
                <div class="col-md-2">
                    <label for="quantity">Số lượng
                    </label>
                    <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1">
                </div>
                <div class="col-md-2">
                    <label for="status">Tình trạng</label>
                    <select class="form-control" id="status">
                        <option value="còn hàng">Còn hàng</option>
                        <option value="hết hàng">Hết hàng</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="hot">Nổi bật</label>
                    <select class="form-control" id="hot" name="hot">
                        <option value="1">Nổi bật</option>
                        <option value="0">Không nổi bật</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="betterSale">Bán chạy</label>
                    <select class="form-control" id="betterSale" name="betterSale">
                        <option value="1">Bán chạy</option>
                        <option value="0">Không bán chạy</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <label for="images">Thêm ảnh
                    </label>
                    <input type="file" name="images" value="images">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <label for="descriptionSummary">Mô tả ngắn gọn</label>
                    <textarea class="form-control" rows="5" id="descriptionSummary" name="descriptionSummary"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    {{--<script>--}}
                        {{--CKEDITOR.replace( 'article-ckeditor' );--}}
                    {{--</script>--}}
                    <label for="description">Mô tả chi tiết</label>
                    <textarea id="description" name="description" rows="7" class="form-control ckeditor" placeholder="mô tả sản phẩm..."></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-offset-2">
                    <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-saved"></i> Lưu lại</button>
                    <a href="{{route('products')}}" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left"></i> Quay lại</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>