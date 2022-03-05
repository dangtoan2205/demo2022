@extends('master')
@section('content')

    <div class="breadcrumbs_area product_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
                            <li>/</li>
                            <li>Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5" style="display: -webkit-inline-box;">
                   <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="source/image/product/product/{{$sanpham->image}}" data-zoom-image="source/image/product/product/{{$sanpham->image}}" alt="big-1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product_d_right">
                       <form action="#">
                           
                            <h1>{{$sanpham->name}}</h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> 1 đánh giá </a></li>
                                    <li class="review"><a href="#">Viết nhận xét </a></li>
                                </ul>
                            </div>
                            <div class="product_price">
                                @if($sanpham->promotion_price==0)
                                <span class="current_price">{{number_format($sanpham->unit_price)}} đồng</span>
                                @else
                                <span class="current_price" style="margin-right:15px;">{{number_format($sanpham->promotion_price)}} đồng</span>
                                <span class="old_price">{{number_format($sanpham->unit_price)}} đồng</span>
                                @endif
                            </div>
                            <div class="product_desc">
                                <p>
                                    {{$sanpham->description}} 
                                </p>
                            </div>

                            <div class="product_variant color">
                                <h3>Màu sắc</h3>
                                <select class="niceselect_option" id="color" name="produc_color">
                                    <option selected value="1">Trắng</option>        
                                    <option value="2">Đen</option>              
                                    <option value="3">Đỏ</option>                      
                                </select>   
                            </div>
                            <div class="product_variant size">
                                <h3>Cỡ</h3>
                                <select class="niceselect_option" id="color1" name="produc_color">
                                    <option selected value="1">36</option>                   
                                    <option value="2">37</option>              
                                    <option value="3">38</option>              
                                    <option value="4">39</option>               
                                    <option value="5">40</option>
                                    <option value="6">41</option>            
                                </select> 
                            </div>
                            <div class="product_variant quantity">
                                <label>Số lượng</label>
                                <input min="1" max="100" value="1" type="number" style="font-size: 15px;">
                                <button class="button" type="submit">
                                    <a href="{{route('themgiohang',$sanpham->id)}}">Thêm vào giỏ hàng</a> 
                                </button>  
                            </div>
                            <div class=" product_d_action">
                               <ul>
                                   <li>
                                        <a href="#" title="Add to wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Thêm vào danh sách yêu thích</a>
                                    </li>
                               </ul>
                            </div>
                            
                        </form>
                        <div class="priduct_social">
                            <h3>Chia sẻ: </h3>
                            <ul>
                                <li>
                                    <a href="https://vi-vn.facebook.com/" title="facebook"><i class="fa fa-facebook"></i></a>
                                </li>           
                                <li>
                                    <a href="https://twitter.com/?lang=vi" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </li>      
                                <li>
                                    <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                </li>        
                            </ul>      
                        </div>

                    </div>
                </div>
            </div>
        </div>    
    </div>
    
    <div class="product_d_info" style="margin-top: 15px;">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Thêm thông tin</a>
                                </li>
                                <li>
                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Nhận xét</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                    <p>
                                        Chưa thêm thông tin
                                    </p>
                                </div>    
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                <div class="product_review_form">
                                    <form action="#">
                                        <h2>Thêm nhận xét</h2>
                                        <p>Địa chỉ email của bạn sẽ không được công bố. </br>Các trường bắt buộc được đánh dấu 
                                        *</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Nhận xét của bạn *</label>
                                                <textarea name="comment" id="review_comment" ></textarea>
                                            </div> 
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Tên *</label>
                                                <input id="author"  type="text">

                                            </div> 
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Email *</label>
                                                <input id="email"  type="text">
                                            </div>  
                                        </div>
                                        <button type="submit">Nhận xét</button>
                                     </form>   
                                </div>     
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>    
    </div>  

    <section class="product_section related_product">
        <div class="container">
            <div class="row">   
                <div class="col-12">
                   <div class="section_title">
                       <h2>Sản phẩm tương tự</h2>
                   </div>
                </div> 
            </div>    
            <div class="product_area"> 
                <div class="row">
                    <div class="product_carousel product_three_column4 owl-carousel">
                        @foreach($sp_tuongtu as $sptt)
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('chitietsanpham',$sptt->id)}}"><img src="source/image/product/product/{{$sptt->image}}" alt=""></a>
                                    <a class="secondary_img" href="{{route('chitietsanpham',$sptt->id)}}"><img src="source/image/product/product_hv/{{$sptt->hv_image}}" alt=""></a>
                                    <div class="quick_button">
                                        <a href="{{route('themgiohang',$sptt->id)}}" title="quick_view">Mua ngay</a>   
                                    </div>
                                    <div class="label_product">
                                        @if($sptt->promotion_price!=0)
                                            <span>Sale</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="product_content">
                                    <h3><a href="product-details.html">{{$sptt->name}}</a></h3>
                                    @if($sptt->promotion_price==0)
                                        <span class="current_price" style="height: 20%";>{{number_format($sptt->unit_price)}} đồng</span>
                                    @else
                                        <span class="current_price" style="margin-right:15px;height: 20%">{{number_format($sptt->promotion_price)}} đồng</span>
                                        <span class="old_price" style="margin-left:0;height: 20%">{{number_format($sptt->unit_price)}} đồng</span>
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
@endsection