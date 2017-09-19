<html>
<head>
    <title>Thêm thương hiệu</title>
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
    <h1>Thêm thương hiệu</h1>
    <form method="post" class="form-group" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="info">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <label>Tên thương hiệu</label>
                    <input class="form-control" type="text" name="name"/>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <label>Logo</label>
                    <input type="file" name="image"/>

                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <a href="{{route('branch.list')}}" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left"></i> Quay lại</a>
                <input type="submit" class="btn btn-info" value="Thêm thương hiệu"/>
            </div>
        </div>
    </form>
</div>
</body>
</html>
<?php
//        if (empty('<input type="submit" class="btn btn-info" value="Thêm thương hiệu"/>')){
//            echo '<img src="../../public/images/chrome-trex-dinosaur.jpg">';
//        }
//?>
<?php
//if (('<input type="file" accept="image/jpeg, image/png" name="image"/>' ==0)){
//    echo '<img src="../../public/images/chrome-trex-dinosaur.jpg">';
//}
//?>
