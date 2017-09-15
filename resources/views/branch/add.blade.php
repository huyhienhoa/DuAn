<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thêm thương hiệu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Thêm thương hiệu</h2>
        <form method="post" class="form-group" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="row">
                <div class="col-md-6">
                    <label>Tên thương hiệu</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6">
                    <label>Thêm ảnh</label>
                    <input type="file" name="photo">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-saved"></i> Lưu lại</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>