@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Danh sách ADMIN</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Username</th>
                        <th>Mật khẩu</th>
                        <th>Tên</th>
                        <th>email</th>
                        <th>Số điện thoại</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $a)
                    <tr class="odd gradeX" align="center">
                        <td>{{$a->username}}</td>
                        <td>{{$a->password}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->phone}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/admin/xoaadmin/{{$a->username}}">Xoá</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/admin/suaadmin/{{$a->username}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
