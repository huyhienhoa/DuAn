<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        table,th{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">

        <div>
            <h2 class="text-center text-danger">Danh sách sản phẩm</h2>
            <div>
                <a href="{{route('showAddForm')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm</a>
            </div><br>
            <table class="table table-bordered table-responsive table-striped">
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Tình trạng</th>
                    <th>Nổi bật</th>
                    <th>Bán chạy</th>
                    <th>Loại hàng</th>
                    <th>Thương hiệu</th>
                    <th>Hình ảnh</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>

                @foreach($products as $key => $product)
                    <tr>
                        <td><?=$key+1; ?></td>
                        <td><?=$product['name']; ?></td>
                        <td><?=number_format($product['cost'],0,'','.'); ?></td>
                        <td><?=$product['quantity']; ?></td>
                        <td><?=$product['status']; ?></td>
                        <td><?=($product['hot'] === 1 ? "<i class='glyphicon glyphicon-ok text-info'></i>" :"<i class='glyphicon glyphicon-remove text-danger'></i>"); ?></td>
                        <td><?=($product['betterSale'] === 1 ? "<i class='glyphicon glyphicon-ok text-info'></i>" :"<i class='glyphicon glyphicon-remove text-danger'></i>"); ?></td>
<!--                        --><?php //$category = \App\Category::find($product['category_id']);?>
                        <td>{{ $product->category->name }}</td>

                        <td><?=$product['branch']['name']; ?></td>
                        <td><img src="/images/{{$product->image}}" width="100px"></td>
                        <td><a href="{{route('edit',['id'=>$product->id])}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i></a></td>
                        <td><a href="{{route('delete',['id'=>$product->id])}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
</body>
</html>