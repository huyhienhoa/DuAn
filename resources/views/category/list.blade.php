@extends("layouts.app")
<style>
    body{
        margin: 20px;
    }

    table {
        width: 100%;
        height: 10px;
        line-height: 50px;
        border: 1px solid black;
    }

    table, th{
        padding-left: 5px;
        padding-right: 5px;
        border: 1px solid black;
        border-collapse: collapse;

    }

    th, td{
        padding-left: 5px;
        padding-right: 5px;
        border: 1px solid black;
        border-collapse: collapse;

    }

    tr th{
        text-align: center;
    }


    tr:nth-child(even) {
        background-color: #dddddd;
    }

    tr:nth-child(odd) {
        background-color: #a1c4c7;
    }

    #footer {
        clear: both;
        border: 1px solid #CDCDCD;
        text-align: center;
        font-size: 20px;
    }

    h1{
        font-weight: bold;
        color: #ba4715;
    }

</style>
@section("content")
<h1>List thể loại</h1>
<a href="{{route("index")}}" class="btn btn-info"><i class="glyphicon glyphicon-home"></i> Trang chủ</a>
<a href="{{route("category.add")}}" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Thêm thể loại</a>
<br><br>
<table>
    <tr>
        <th>STT</th>
        <th>Tên loại</th>
        <th>Xóa</th>
    </tr>

    @foreach($categories as $key => $category)
        <tr>
            <td style="text-align: center"><?=$key+1; ?></td>
            <td style="text-align: center">{{$category->name}}</td>
            <td style="text-align: center"><a href="{{route("category.deleteForm", ['id'=> $category->id])}}"><span class="glyphicon glyphicon-trash btn btn-danger"></span></a></td>
        </tr>
    @endforeach
</table>
<br><br>
<br><br>
@endsection

