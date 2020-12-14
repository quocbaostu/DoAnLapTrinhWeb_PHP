@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Danh sách SÁCH</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Giá</th>
                        <th>Hình</th>
                        <th>Mã Loại</th>
                        <th>Mã NXB</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sach as $s)
                    <tr class="odd gradeX" align="center">
                        <td>{{$s->book_id}}</td>
                        <td>{{$s->book_name}}</td>
                        <td>{{Str::limit($s->description, 50)}}</td>
                        <td>{{$s->price}}</td>
                        <td>{{$s->img}}</td>
                        <td>{{$s->cat_id}}</td>
                        <td>{{$s->pub_id}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sach/xoasach/{{$s->book_id}}"> Xoá</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sach/suasach/{{$s->book_id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
