@extends("layouts.app")
<style>
    body{
        margin: 20px;
    }

    h1{
        font-weight: bold;
        color: #ba4715;
    }
</style>
@section("content")
<div class="container">
    <h1>Thêm thể loại</h1>
    <form method="post">
        {{csrf_field()}}
        <div class="info">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <label>Tên thể loại</label>
                    <input class="form-control" type="text" name="name"/>
                </div>
            </div>
            <br>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <a href="{{route('category.list')}}" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left"></i> Quay lại</a>
                <input type="submit" class="btn btn-info" value="Thêm thể loại"/>
            </div>
        </div>
    </form>
</div>
@endsection
