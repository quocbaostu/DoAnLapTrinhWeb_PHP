@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Danh sách NGƯỜI DÙNG</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                    <tr class="odd gradeX" align="center">
                        <td>{{$u->email}}</td>
                        <td>{{$u->password}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->address}}</td>
                        <td>{{$u->phone}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
