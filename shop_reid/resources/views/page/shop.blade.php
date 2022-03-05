@extends('master')
@section('content')

    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
                            <li>/</li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="shop_inner_area">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <!--sidebar widget start-->
                        <div class="sidebar_widget">
                            <div class="widget_list widget_filter" style="display: none;">
                                <h2>Lọc theo giá</h2>
                                <form action="#"> 
                                    <div id="slider-range"></div>   
                                    <button type="submit">Lọc</button>
                                    <input type="text" name="text" id="amount" />   

                                </form> 
                            </div>

                            <div class="widget_list widget_categories">
                                <h2>Danh mục sản phẩm: </h2>
                                <ul>
                                    <li><a href="#">Giày Nam<span>16</span></a> </li>
                                    <li><a href="#">Giày Nữ<span>10</span></a> </li>
                                </ul>
                            </div>

                            <div class="widget_list widget_categories">
                                <h2>Hãng sản xuất</h2>
                                <ul>
                                    <li><a href="#">Adidas<span>6</span></a> </li>
                                    <li><a href="#">Nike<span>12</span></a> </li>
                                    <li><a href="#">Supreme<span>11</span></a> </li>
                                    <li><a href="#">Converve<span>7</span></a> </li>
                                    <li><a href="#">Valentin<span>9</span></a> </li>
                                </ul>
                            </div>

                            <div class="widget_list widget_categories">
                                <h2>Màu sắc</h2>
                                <ul>
                                    <li><a href="#">Màu Nâu<span>6</span></a> </li>
                                    <li><a href="#">Màu Be<span>10</span></a> </li>
                                    <li><a href="#">Màu Cam<span>4</span></a> </li>
                                    <li><a href="#">Màu đen<span>4</span></a> </li>
                                    <li><a href="#">Màu Trắng<span>7</span></a> </li>
                                    <li><a href="#">Màu Xám<span>8</span></a> </li>
                                </ul>
                            </div>

                            <div class="widget_list tag-cloud">
                                <h2>Nội dung gắn thẻ</h2>
                                <div class="tag_widget">
                                    <ul>
                                        <li><a href="#">Sự kiện</a></li>
                                        <li><a href="#">Giảm giá</a></li>
                                        <li><a href="#">Thương hiệu</a></li>
                                        <li><a href="#">Phối màu</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="col-lg-9 col-md-12">
                        <!--shop wrapper start-->
                        <div class="shop_title">
                            <h1>shop</h1>
                        </div>

                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">

                                <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                                <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                                <button data-role="grid_5" type="button"  class="btn-grid-5" data-toggle="tooltip" title="5"></button>

                                <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                            </div>

                            <div class="page_amount">
                                <p>Tìm thấy {{count($main_product)}} sản phẩm</p>
                            </div>
                        </div>
                         <!--shop toolbar end-->
                        
                        <div class="row shop_wrapper">
                            @foreach($main_product as $main_p)
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('chitietsanpham',$main_p->id)}}">
                                            <img src="source/image/product/product/{{$main_p->image}}" alt="">
                                        </a>
                                        <a class="secondary_img" href="{{route('chitietsanpham',$main_p->id)}}">
                                            <img src="source/image/product/product_hv/{{$main_p->hv_image}}" alt="">
                                        </a>

                                        <div class="quick_button">
                                            <a href="{{route('themgiohang',$main_p->id)}}"title="quick_view">Mua ngay</a>
                                        </div>

                                        <div class="double_base">
                                            @if($main_p->promotion_price!=0)
                                            <div class="label_product">
                                                <span>Sale</span>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="product_content grid_content" style="margin: 0px 10px;height: 55px;width: 100%">
                                        <h3 style="font-size: 13px;height: 100%;"><a href="#">{{$main_p->name}}</a></h3>
                                        @if($main_p->promotion_price==0)
                                            <span class="current_price">{{number_format($main_p->unit_price)}} đồng</span>
                                        @else
                                            <span class="current_price" style="margin-right:5px;font-size: 100%">{{number_format($main_p->promotion_price)}} đồng</span>
                                            <span class="old_price" style="font-size: 100%">{{number_format($main_p->unit_price)}} đồng</span>
                                        @endif
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product-details.html">{{$main_p->name}}</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                        @if($main_p->promotion_price==0)
                                        <span class="current_price">{{number_format($main_p->unit_price)}}</span>
                                        @else
                                        <span class="current_price" style="margin-right:15px;">{{$main_p->promotion_price}}</span>
                                        <span class="old_price">{{number_format($main_p->unit_price)}}</span>
                                        @endif
                                        </div>
                                        <div class="product_desc">
                                            <p>{{$main_p->description}}</p>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>   
                
        </div>
    </div>
    <!--shop  area end-->
@endsection