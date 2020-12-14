@extends('admin.layout.admin')
@section('content')
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <small>Sửa SÁCH</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">

            @if (count($errors)>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
            @endif

            <form action="admin/sach/suasach/{{$book->book_id}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control" name="ma" value="{{$book->book_id}}" />
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="ten" value="{{$book->book_name}}" />
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="mota" value="{{$book->description}}"" />
                </div>
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="gia" value="{{$book->price}}"" />
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <p><img src="source/image/product/{{$book->img}}"></p>
                    <input name="hinh" type="file" />
                </div>
                <div class="form-group">
                    <label>Mã loại:</label>
                    <select class="custom-select" name="maloai">
                        @foreach ($maloai as $ml)
                            <option
                                @if ($book->cat_id == $ml->cat_id)
                                    {{"selected"}}
                                @endif

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
                                @if ($book->pub_id == $mn->pub_id)
                                    {{"selected"}}
                                @endif
                                value="{{$mn->pub_id}}">{{$mn->pub_name}}
                            </option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
            <form>
        </div>
    </div>
</div>
@endsection
