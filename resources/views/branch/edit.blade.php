@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chỉnh sửa</h1>
    <form method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <label>Tên thương hiệu</label>
                <input class="form-control" type="text" name="name" value="{{$branch->name}}"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <label>Logo</label>
                <input type="file" accept="image/jpeg, image/png" name="image" value="{{$branch->image}}"/>
                <br>
                <label>Ảnh cũ: </label><br>
                <img src="/images/{{$branch->image}}" width="250px" style="border: 1px solid gray">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <a href="{{route('branch.list')}}" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left"></i> Quay lại</a>
                <input type="submit" class="btn btn-info" value="Chỉnh sửa"/>
            </div>
        </div>
    </form>
</div>
@endsection
