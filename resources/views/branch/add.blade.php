@extends('layouts.app')

@section('content')
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
@endsection
