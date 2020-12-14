@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <small>Thêm Sách</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="admin/sach/themsach" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <label>Mã sách:</label>
                    <input class="form-control" name="ma" placeholder="Nhập mã sách" />
                </div>
                <div class="form-group">
                    <label>Tên sách:</label>
                    <input class="form-control" name="ten" placeholder="Nhập tên sách" />
                </div>
                <div class="form-group">
                    <label>Mô tả:</label>
                    <input class="form-control" name="mota" placeholder="Nhập mô tả sách" />
                </div>
                <div class="form-group">
                    <label>Giá:</label>
                    <input class="form-control" name="gia" placeholder="Nhập giá" />
                </div>
                <div class="form-group">
                    <label>Hình ảnh:</label>
                    <input name="hinh" type="file" />
                </div>
                <div class="form-group">
                    <label>Mã loại:</label>
                    <select class="custom-select" name="maloai">
                        @foreach ($maloai as $ml)
                        <option
                            value="{{$ml->cat_id}}">{{$ml->cat_name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mã NXB:</label>
                    <select class="custom-select" name="manxb">
                        @foreach ($manxb as $mn)
                        <option
                            value="{{$mn->pub_id}}">{{$mn->pub_name}}
                        </option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-default">Thêm sách</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
            <form>
        </div>
    </div>
</div>
@endsection
