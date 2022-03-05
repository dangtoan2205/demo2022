
    <div class="off_canvars_overlay">
                
    </div> 
    <header class="header_area header_three">
        <div class="header_top">
            <div class="container-fluid">   
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="welcome_text">
                           <ul>
                               <li><span>Thời gian hoạt động : </span>Từ 8:30 - 22:00 tất cả các ngày trong tuần (bao gồm cả các ngày lễ, ngày Tết).</li>
                               <li><span>Hotline : </span>0963836224</li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="top_right text-right">
                            <ul>
                                <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                    @if(Auth::check())
                                        <li style="width: 125px;"><a href="">{{Auth::user()->full_name}}</a></li>
                                        <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                                    @else
                                        <li><a href="{{route('dangnhap')}}">Đăng nhập</a></li>
                                        <li><a href="{{route('dangki')}}">Đăng kí</a></li>
                                        <li><a href="{{route('adcapnhatsp')}}">Admin</a></li>
                                    @endif
                                    </ul>
                                </li> 
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>

        <div class="header_middel">
            <div class="container-fluid">
                <div class="middel_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="search_bar">
                                <form action="#">                          
                                    <input placeholder="Tìm kiếm ở đây ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="logo">
                                <a href="{{route('trangchu')}}"><img src="source/image/logo/logo.png" alt=""></a>
                            </div>
                        </div>


                        <div class="col-lg-4">
                            @if(Session::has('cart'))
                            <div class="cart_area">
                                <div class="cart_link">
                                    <a href="#"><i class="fa fa-shopping-basket"></i>
                                        (@if(Session::has('cart')){{Session('cart')->totalQty}} sản phẩm @else 0 Sản phẩm @endif)
                                    </a>
                                @foreach($product_cart as $product)
                                    <!--mini cart-->
                                     <div class="mini_cart">
                                        <div class="cart_item top">
                                       <div class="cart_img" style="width: 18%;">
                                           <a href="#">
                                                <img src="source/image/product/product/{{$product['item']['image']}}" alt="">
                                            </a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">{{$product['item']['name']}}</a>

                                            <span>{{$product['qty']}} x 
                                                @if($product['item']['promotion_price']==0)
                                                    {{number_format($product['item']['unit_price'])}}  
                                                @else 
                                                    {{number_format($product['item']['promotion_price'])}}
                                                @endif đồng
                                            </span>
    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="{{route('xoagiohang',$product['item']['id'])}}"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                                
                                    <div class="cart__table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Tổng tiền :</td>
                                                    <td class="text-right">{{number_format(Session('cart')->totalPrice)}} đồng</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="{{route('hoadon')}}">Đặt hàng</a>
                                    </div>
                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu_inner">
                            <div class="main_menu"> 
                                <nav>  
                                    <ul>
                                        <li class="active">
                                            <a href="{{route('trangchu')}}">Trang Chủ</a>
                                        </li>
                                        <li>
                                            <a href="{{route('shop')}}">Shop</a>   
                                        </li>
                                        <li>
                                            <a href="{{route('gioithieu')}}">Giới thiệu</a>
                                        </li>
                                        <li><a href="{{route('tintuc')}}">Tin tức</a></li> 
                                        <li><a href="{{route('diachi')}}">Địa chỉ</a></li>
                                    </ul>   
                                </nav> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->