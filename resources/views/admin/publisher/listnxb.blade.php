@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Danh sách NHÀ XUẤT BẢN</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID Nhà xuất bản</th>
                        <th>Tên Nhà xuất bản</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nxb as $n)
                    <tr class="odd gradeX" align="center">
                        <td>{{$n->pub_id}}</td>
                        <td>{{$n->pub_name}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/nhaxb/xoanxb/{{$n->pub_id}}">Xoá</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nhaxb/suanxb/{{$n->pub_id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
