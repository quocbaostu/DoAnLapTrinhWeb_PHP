@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <small>Sửa NHÀ XUẤT BẢN</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="admin/nhaxb/suanxb/{{$nxb->pub_id}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <label>ID Nhà xuất bản</label>
                    <input class="form-control" name="ma" value="{{$nxb->pub_id}}" />
                </div>
                <div class="form-group">
                    <label>Tên Nhà xuất bản</label>
                    <input class="form-control" name="ten" value="{{$nxb->pub_name}}" />
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
            <form>
        </div>
    </div>
</div>
@endsection
