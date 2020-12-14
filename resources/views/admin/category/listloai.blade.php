@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Danh sách LOẠI SÁCH</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID Loại</th>
                        <th>Tên Loại</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loai as $l)
                    <tr class="odd gradeX" align="center">
                        <td>{{$l->cat_id}}</td>
                        <td>{{$l->cat_name}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/loai/xoaloai/{{$l->cat_id}}">Xoá</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loai/sualoai/{{$l->cat_id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
