<html>
<head>
    <title>Xóa sản phẩm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
    body{
        margin: 20px;
    }

    h1{
        font-weight: bold;
        color: #ba4715;
    }
</style>
<body>
<div class="container">
    <h1>Xóa sản phẩm</h1>
    <h3>Mày chắc không?</h3>
    <form method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <label>Tên thương hiệu</label>
                <input class="form-control" type="text" name="name" value="{{$branch->name}}" disabled/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <label>Logo</label>
                <input type="file" accept="image/jpeg, image/png" name="image" value="{{$branch->image}}"  disabled/>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <a href="{{route('branch.list')}}" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left"></i> Quay lại</a>
                <input type="submit" class="btn btn-info" value="Xóa"/>
            </div>
        </div>
    </form>
</div>
</body>
</html>