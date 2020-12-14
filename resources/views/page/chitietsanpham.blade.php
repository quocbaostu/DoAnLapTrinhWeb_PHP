@extends('master')
@section('content')
<div class="inner-header">
<div class="container">
    <div class="pull-left">
        <h6 class="inner-title">{{$sachhh->book_name}}</h6>
    </div>
    <div class="pull-right">
        <div class="beta-breadcrumb font-large">
            <a href="trang-chu  ">Trang chủ</a> / <span>Sản Phẩm</span>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>

<div class="container">
<div id="content">
    <div class="row">
        <div class="col-sm-9">

            <div class="row">
                <div class="col-sm-4">
                    <img src="source/image/product/{{$sachhh->img}}" alt="">
                </div>
                <div class="col-sm-8">
                    <div class="single-item-body">
                        <p class="single-item-title">{{$sachhh->book_name}}</p>
                        <p class="single-item-price"><span>{{$sachhh->price}}</span></p>
                    </div>

                    <div class="clearfix"></div>
                    <div class="space20">&nbsp;</div>

                    <div class="single-item-desc">
                        <p>{{$sachhh->description}}</p>
                    </div>
                    <div class="space20">&nbsp;</div>

                    <p>Options:</p>
                    <div class="single-item-options">
                        <select class="wc-select" name="color">
                            <option>Số Lượng</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="space50">&nbsp;</div>
            <div class="beta-products-list">
                <h4>Sản phẩm tương tự</h4>

                <div class="row">
                    @foreach ($sach_tuongtuuu as $tuongtu)
                    <div class="col-sm-4">
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="product.html"><img src="source/image/product/{{$tuongtu->img}}" alt=""></a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">{{Str::limit($tuongtu->book_name, 30)}}</p>
                                <p class="single-item-price">{{$tuongtu->price}}</p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">{{ $sach_tuongtuuu->links() }}</div>
            </div> <!-- .beta-products-list -->
        </div>
        <div class="col-sm-3 aside">
            <div class="widget">
                <h3 class="widget-title">Best Sellers</h3>
                <div class="widget-body">
                    <div class="beta-sales beta-lists">
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
                            <div class="media-body">
                                Sample Woman Top
                                <span class="beta-sales-price">$34.55</span>
                            </div>
                        </div>
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
                            <div class="media-body">
                                Sample Woman Top
                                <span class="beta-sales-price">$34.55</span>
                            </div>
                        </div>
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
                            <div class="media-body">
                                Sample Woman Top
                                <span class="beta-sales-price">$34.55</span>
                            </div>
                        </div>
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
                            <div class="media-body">
                                Sample Woman Top
                                <span class="beta-sales-price">$34.55</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- best sellers widget -->
            <div class="widget">
                <h3 class="widget-title">New Products</h3>
                <div class="widget-body">
                    <div class="beta-sales beta-lists">
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
                            <div class="media-body">
                                Sample Woman Top
                                <span class="beta-sales-price">$34.55</span>
                            </div>
                        </div>
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
                            <div class="media-body">
                                Sample Woman Top
                                <span class="beta-sales-price">$34.55</span>
                            </div>
                        </div>
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
                            <div class="media-body">
                                Sample Woman Top
                                <span class="beta-sales-price">$34.55</span>
                            </div>
                        </div>
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
                            <div class="media-body">
                                Sample Woman Top
                                <span class="beta-sales-price">$34.55</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- best sellers widget -->
        </div>
    </div>
</div> <!-- #content -->
</div> <!-- .container -->
@endsection
