@extends('layouts.app')
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
@section('content')


<h1>List thương hiệu</h1>
<a href="{{route("index")}}" class="btn btn-info"><i class="glyphicon glyphicon-home"></i> Trang chủ</a>
<a href="{{route("branch.add")}}" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Thêm thương hiệu</a>
<br><br>
<table>
    <tr>
        <th>STT</th>
        <th>Tên thương hiệu</th>
        <th>Logo</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>

    @foreach($branches as $key => $branch)
        <tr>
            <td style="text-align: center"><?=$key+1; ?></td>
            <td>{{$branch->name}}</td>
            <td style="text-align: center; padding-top: 5px; padding-bottom: 5px"><img src="/images/{{$branch->image}}" width="120px"></td>
            <td style="text-align: center"><a href="{{route("branch.edit", ['id'=> $branch->id])}}"><span class="glyphicon glyphicon-edit btn btn-success"></span></a></td>
            <td style="text-align: center"><a href="{{route("branch.deleteForm", ['id'=> $branch->id])}}"><span class="glyphicon glyphicon-trash btn btn-danger"></span></a></td>
        </tr>
    @endforeach
</table>
<br><br>
<a href="{{route("index")}}" class="btn btn-info"><i class="glyphicon glyphicon-home"></i> Trang chủ</a>
<a href="{{route("branch.add")}}" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Thêm thương hiệu</a>
<br><br>
{{--{{$branches->links()}}--}}
@endsection

