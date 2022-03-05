@extends('master')
@section('content')

    <!--slider start-->
    <div class="slider_area slider_style home_three_slider owl-carousel">
        @foreach($slide as $sl)
        <div class="single_slider" data-bgimg="source/image/slide/slide/{{$sl->image}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_one">
                            <img src="source/image/slide/content/{{$sl->content}}" alt="">
                            <p>{{$sl->notes}}</p>
                            <a href="#">Khám phá ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!--slider end-->

    <!--banner start-->
    <div class="banner_section banner_section_three">
        <div class="container-fluid">
            <div class="row ">
               <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="source/image/bg/banner8.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="source/image/bg/banner9.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area bottom">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="source/image/bg/banner10.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner end-->

    <!--product start-->
    <section class="product_section womens_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="section_title">
                       <h2>Sản phẩm của chúng tôi</h2>
                       <p>Các sản phẩm thiết kế hiện đại,mới nhất</p>
                   </div>
                </div>
            </div>
            <div class="product_area">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="clothing" role="tabpanel">
                        <div class="product_container">

                            <div class="row product_column4">
                                @foreach($new_product as $new)
                                <div class="col-lg-3" style="height: 389px;">
                                    <div class="single_product">
                                            <div class="product_thumb">
                                            <a class="primary_img" href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/product/{{$new->image}}" alt=""></a>
                                            <a class="secondary_img" href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/product_hv/{{$new->hv_image}}" alt=""></a>
                                            <div class="quick_button">
                                                <a href="{{route('themgiohang',$new->id)}}" title="quick_view">Mua ngay</a>
                                            </div>
                                            <div class="double_base">
                                                @if($new->promotion_price!=0)
                                                <div class="label_product">
                                                    <span>Sale</span>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product_content" style="margin: 0px 10px">
                                            <h3 style="font-size: 13px;height: 45px;"><a href="#">{{$new->name}}</a></h3>
                                            @if($new->promotion_price==0)
                                            <span class="current_price">{{number_format($new->unit_price)}} đồng</span>
                                            @else
                                            <span class="current_price" style="margin-right:15px;">{{number_format($new->promotion_price)}} đồng</span>
                                            <span class="old_price">{{number_format($new->unit_price)}} đồng</span>
                                            @endif
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
    </section>

    <!--product start-->
    <section class="product_section womens_product bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="section_title">
                       <h2>Sản phẩm đang được giảm giá</h2>
                       <p>Sản phẩm ấn tượng và bán chạy nhất</p>
                   </div>
                </div>
            </div>
            <div class="product_area">
                <div class="row">
                    <div class="product_carousel product_three_column4 owl-carousel">
                        @foreach($sanpham_khuyenmai as $spkm)
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('chitietsanpham',$spkm->id)}}"><img src="source/image/product/product/{{$spkm->image}}" alt=""></a>
                                    <a class="secondary_img" href="{{route('chitietsanpham',$spkm->id)}}"><img src="source/image/product/product_hv/{{$spkm->hv_image}}" alt=""></a>

                                    <div class="quick_button">
                                        <a href="{{route('themgiohang',$spkm->id)}}" title="quick_view">Mua ngay</a>
                                    </div>

                                    <div class="double_base">
                                        @if($spkm->promotion_price!=0)
                                        <div class="label_product">
                                            <span>Sale</span>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="product_content" style="margin: 0px 10px">
                                    <h3 style="font-size: 13px;height: 45px;"><a href="#">{{$spkm->name}}</a></h3>
                                    @if($spkm->promotion_price==0)
                                    <span class="current_price">{{number_format($spkm->unit_price)}} đồng</span>
                                    @else
                                    <span class="current_price" style="margin-right:15px;">{{number_format($spkm->promotion_price)}} đồng</span>
                                    <span class="old_price">{{number_format($spkm->unit_price)}} đồng</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!--product end-->

    <!--blog start-->
    <section class="blog_section blog_section_three">
        <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section_title">
                       <h2>Bài viết mới nhất</h2>
                       <p>Cập nhật xu thế thời trang</p>
                   </div>
               </div>
           </div>
            <div class="row">
                <div class="blog_wrapper blog_column3 owl-carousel">
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('tintuc')}}"><img src="source/image/blog/blog1.jpg" alt=""></a>
                                <div class="blog_icon">
                                    <a href="{{route('tintuc')}}"></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('tintuc')}}">Đồng giá chỉ từ 99k đến 499k</a></h3>
                                <div class="author_name">
                                   <p>
                                        <span class="post_by"><i class="far fa-calendar-alt"></i></span>
                                        <span class="themes"> 28/9/ 2021</span>
                                        <span class="post_by" style="margin-left: 10px;"><i class="fas fa-user-tag"></i></span>
                                        <span class="themes">Admin</span>
                                        <span class="post_by" style="margin-left: 10px;"><i class="fas fa-comment"></i></span>
                                        <span class="themes">0</span>
                                   </p>
                                </div>
                                <div class="post_desc">
                                    <p>Bạn biết tin gì chưa? Reid đang áp dụng chương trình XẢ HÀNG TỒN KHO- KHÔNG LO VỀ GIÁ Giảm từ 20% , 30% , 40% , 50% với hàng ngàn sản phẩm-Giày công sở-Giày thể th...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('tintuc')}}"><img src="source/image/blog/blogg2.jpg" alt=""></a>
                                <div class="blog_icon">
                                    <a href="{{route('tintuc')}}"></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('tintuc')}}">TOP 6 MẪU SNEAKERS TUYỆT ĐẸP TỪ THỜI ÔNG BÀ ANH KHIẾN TÍN ĐỒ THỜI TRANG HOÀI CỔ MÊ TÍT</a></h3>
                                <div class="author_name">
                                   <p>
                                        <span class="post_by"><i class="far fa-calendar-alt"></i></span>
                                        <span class="themes"> 28/9/ 2021</span>
                                        <span class="post_by" style="margin-left: 10px;"><i class="fas fa-user-tag"></i></span>
                                        <span class="themes">Admin</span>
                                        <span class="post_by" style="margin-left: 10px;"><i class="fas fa-comment"></i></span>
                                        <span class="themes">0</span>
                                   </p>
                                </div>
                                <div class="post_desc">
                                    <p>Ngày nay, ranh giới giữa thể thao và thời trang đã dần được xóa nhòa, khiến sneakers trở thành loại giày phổ biến nhất thế giới và đương nhiên phải có lý do cho điều đó.Với nhiề...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="{{route('tintuc')}}"><img src="source/image/blog/blog3.jpg" alt=""></a>
                                <div class="blog_icon">
                                    <a href="{{route('tintuc')}}"></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <h3><a href="{{route('tintuc')}}">3 kiểu sneaker sẽ thống trị đường phố năm 2020</a></h3>
                                <div class="author_name">
                                   <p>
                                        <span class="post_by"><i class="far fa-calendar-alt"></i></span>
                                        <span class="themes"> 28/9/ 2021</span>
                                        <span class="post_by" style="margin-left: 10px;"><i class="fas fa-user-tag"></i></span>
                                        <span class="themes">Admin</span>
                                        <span class="post_by" style="margin-left: 10px;"><i class="fas fa-comment"></i></span>
                                        <span class="themes">0</span>
                                   </p>
                                </div>
                                <div class="post_desc">
                                    <p>Theo Whowhatwear, có 3 kiểu sneaker sẽ lên ngôi vào mùa này.Có thể nói trong 3 năm gần đây là thời đại của những đôi sneaker. Từ những thương hiệu thể thao truyền thống cho tới ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog end-->

@endsection
