@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <small>Thêm TÀI KHOẢN ADMIN</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="admin/admin/themadmin" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <label>Username:</label>
                    <input class="form-control" name="username" placeholder="Nhập Username" />
                </div>
                <div class="form-group">
                    <label>Mật khẩu:</label>
                    <input class="form-control" name="password" type="password" placeholder="Nhập mật khẩu" />
                </div>
                <div class="form-group">
                    <label>Xác nhận mật khẩu:</label>
                    <input class="form-control" name="re-password" type="password" placeholder="Xác nhận mật khẩu" />
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="name" placeholder="Nhập tên tài khoản" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" placeholder="Nhập email" />
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input class="form-control" name="phone" placeholder="Nhập số điện thoại" />
                </div>
                <button type="submit" class="btn btn-default">Thêm tài khoản</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
            <form>
        </div>
    </div>
</div>
@endsection
