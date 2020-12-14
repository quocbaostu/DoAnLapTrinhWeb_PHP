@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">

        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Home</a> / <span>Đăng kí</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">

        <form action="{{route('dang-ky-user')}}" method="POST" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="row">
                <div class="col-sm-3"></div>
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if (session('thanhcong'))
                    <div class="alert alert-success">{{session('thanhcong')}}</div>
                @endif

                <div class="col-sm-6">
                    <h4>Đăng kí</h4>
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        <label for="email">Địa chỉ Email*</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Mật Khẩu*</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Xác nhận mật khẩu*</label>
                        <input type="password" name="re-password" required>
                    </div>
                    <div class="form-block">
                        <label for="your_last_name">Họ tên*</label>
                        <input type="text" name="name" required>
                    </div>

                    <div class="form-block">
                        <label for="adress">Địa chỉ*</label>
                        <input type="text" name="address" value="" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Só điện thoại*</label>
                        <input type="text" name="phone" required>
                    </div>

                    <div class="form-block">
                        <button type="submit" class="btn btn-danger">Đăng ký</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div>
</div>
@endsection
