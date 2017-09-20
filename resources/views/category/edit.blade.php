<html>
<head>
    <title>Sửa thể loại</title>
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
    <h1>Chỉnh sửa</h1>
    <form method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <label>Tên thể loại</label>
                <input class="form-control" type="text" name="name" value="{{$category->name}}"/>
            </div>
        </div>
        <br>
        <br><br>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <a href="{{route('category.list')}}" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left"></i> Quay lại</a>
                <input type="submit" class="btn btn-info" value="Chỉnh sửa"/>
            </div>
        </div>
    </form>
</div>
</body>
</html>
