@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <small>Thêm NHÀ XUẤT BẢN</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">

            @if (session('thanhcong'))
                <div class="alert alert-success">{{session('thanhcong')}}</div>
            @endif

            <form action="admin/nhaxb/themnxb" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <label>Mã Nhà xuất bản:</label>
                    <input class="form-control" name="ma" placeholder="Nhập mã nhà xuất bản" />
                </div>
                <div class="form-group">
                    <label>Tên Nhà xuất bản:</label>
                    <input class="form-control" name="ten" placeholder="Nhập tên nhà xuất bản" />
                </div>
                <button type="submit" class="btn btn-default">Thêm nhà xuất bản</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
            <form>
        </div>
    </div>
</div>
@endsection
