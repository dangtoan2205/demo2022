@extends('master')
@section('content')
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
                            <li>/</li>
                            <li>Tin tức</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    
    <div class="blog_area blog_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <aside class="blog_sidebar">

                        <div class="sidebar_widget search_form">
                            <form action="#">
                                <input placeholder="Tìm kiếm..." type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        
                        <div class="sidebar_widget widget_categories">
                            <h3 class="widget_title">Thể loại</h3>
                            <ul>
                                <li><a href="#">Sáng tạo </a> (2)</li>
                                <li><a href="#">Thời trang </a> (3)</li>
                                <li><a href="#">Hình ảnh </a> (10)</li>
                                <li><a href="#">Du lịch </a> (6)</li>
                            </ul>
                        </div>
                        
                        <div class="sidebar_widget recent_post">
                            <h3 class="widget_title">Bài đăng gần đây</h3>
                            <div class="sidebar_post">
                                <div class="post_img" style="width: 123px;">
                                    <a href="#"><img src="source/image/news/post1.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Adidas – “ông trùm” thống thị trên thế giới ...</a></h3>
                                5, 2021</span>
                                </div>
                            </div>

                            <div class="sidebar_post">
                                <div class="post_img"style="width: 123px;">
                                    <a href="#"><img src="source/image/news/post2.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Nike - quả thực là một thiếu sót rất lớn nếu ...</a></h3>
                                    <span>September 26, 2021</span>
                                </div>
                            </div> 

                            <div class="sidebar_post">
                                <div class="post_img"style="width: 123px;">
                                    <a href="#"><img src="source/image/news/post3.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Giày Supreme – thương hiệu giày Sneaker xa xỉ ...</a></h3>
                                    <span>September 27, 2021</span>
                                </div>
                            </div>

                            <div class="sidebar_post">
                                <div class="post_img"style="width: 123px;">
                                    <a href="#"><img src="source/image/news/post4.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Puma - trong danh sách những thương hiệu giày ...</a></h3>
                                    <span>September 28, 2021</span>
                                </div> 
                            </div>

                            <div class="sidebar_post">
                                <div class="post_img"style="width: 123px;">
                                    <a href="#"><img src="source/image/news/post5.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">New Balance là một trong những thương hiệu giày ...</a></h3>
                                    <span>September 29, 2021</span>
                                </div> 
                            </div> 

                            <div class="sidebar_post">
                                <div class="post_img"style="width: 123px;">
                                    <a href="#"><img src="source/image/news/post6.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Converse - là thương hiệu giày thể thao đầu tiên ...</a></h3>
                                    <span>September 30, 2021</span>
                                </div> 
                            </div> 

                            <div class="sidebar_post">
                                <div class="post_img"style="width: 123px;">
                                    <a href="#"><img src="source/image/news/post7.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Vans cũng đạt được thành tích ấn tượng trong ...</a></h3>
                                    <span>September 31, 2021</span>
                                </div> 
                            </div>      
                        </div>
                        

                        <div class="sidebar_widget recent_post">
                            <h3 class="widget_title">Bình luận</h3>
                            @foreach($blognew as $bnew)
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="#"><img src="source/image/blog/avatar_admin.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">{{$bnew->full_name}}</a></h3>
                                    <span>{{$bnew->created_at}}</span>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="#"><img src="source/image/blog/avatar_admin.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Nguyễn Thanh Tuấn</a></h3>
                                    <span>September 26, 2021</span>
                                </div>
                                
                            </div> 
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="#"><img src="source/image/blog/avatar_admin.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Phạm Thùy Linh</a></h3>
                                    <span>September 27, 2021</span>
                                </div>
                                
                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="#"><img src="source/image/blog/avatar_admin.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="#">Nguyễn Hương Tú</a></h3>
                                    <span>September 28, 2021</span>
                                </div>
                                
                            </div>  -->    
                        </div>
                        <!--recent post end-->
                        
                        
                        <div class="sidebar_widget tags_widget">
                            <h3 class="widget_title">Gắn thẻ bài viết</h3>
                            <ul>
                                <li><a href="#">Cửa hàng</a></li>
                                <li><a href="#">Địa chỉ</a></li>
                                <li><a href="#">Sản phẩm</a></li>
                            </ul>
                        </div>
                        
                    </aside>
     
                    <!--blog sidebar start-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
                       <div class="blog__thumb">
                           <a href="#"><img src="source/image/news/supreme.png" alt=""></a>
                       </div>
                       <div class="blog_info_wrapper">
                            <div class="blog_info_inner">
                                <div class="post__date" style="position: inherit;">
                                   <span class="month">Tháng</span>
                                   <span class="day">9</span>
                               </div>
                               <div class="post__info">
                                   <div class="post_header">
                                       <h3>Thương hiệu Supreme xa xỉ</h3>
                                   </div>
                                    <div class="post_meta">
                                       <span>Được đăng bởi</span>
                                        <span><a href="#">Admin</a></span>
                                        <span><a href="#">/ Đặng Ngọc Toàn</a></span>
                                    </div>
                                    <div class="post_content">
                                        <p>
                                            Supreme được biết đến là một thương hiệu thời trang đường phố của Mỹ vô cùng nổi tiếng, với mức độ tiêu thụ khủng trên toàn cầu. Tại Việt Nam, những năm gần đây, thương hiệu này cũng dần trở nên phổ biến hơn, nhất là trong giới trẻ.
                                        </p>
                                        <blockquote>
                                            <p>
                                                Một số sản phẩm từ thương hiệu Supreme đang được thịnh hành hiện nay
                                            </p>
                                        </blockquote>
                                        <p>
                                           <div>
                                                <div style="font-style: normal;color: #747474;text-transform: uppercase;font-size: 16px;margin: 10px 0px 10px 10px;">
                                                    1. Áo phông Supreme 
                                                </div>
                                                <div>
                                                    <img src="source/image/news/blog1.png" alt="" style="width:100%;">
                                                </div>
                                                <div style="font-weight: 600;">
                                                    <h3 style="font-size: 15px;">Áo phông Supreme là một trong những item được thiết kế từ thuở ban đầu của thương hiệu này. Vẻ ngoài của áo vô cùng đơn giản, màu trắng trơn hoặc đen và mặt trước in hình logo đỏ nổi bật. Chiếc áo này đánh tan định kiến về phong cách đường phố của dân hiphop là phải sặc sỡ, rườm rà, quái dị. Phong cách tối giản, không kém phần mạnh mẽ đã tạo nên sức hút đối với các tín đồ thời trang. Tuy nhiên, điều quan trọng không kém khiến chiếc áo này được yêu thích trong nhiều năm như vậy là do chất liệu heavy-cotton (vải bông dày), mềm mại, thấm hút cực tốt và vô cùng bền theo thời gian.</h3>
                                                </div> 
                                            </div>

                                            <div>
                                                <div style="font-style: normal;color: #747474;text-transform: uppercase;font-size: 16px;margin: 10px 0px 10px 10px;">
                                                    2. Áo hoodie Supreme
                                                </div>
                                                <div>
                                                    <img src="source/image/news/blog2.png" alt="" style="width:100%;">
                                                </div>
                                                <div style="font-weight: 600;">
                                                    <h3 style="font-size: 15px;">
                                                        Nói đến dân hiphop rock thời trang đường phố không thể nào không nói tới hoodie. Đó là lý do item này của Supreme được săn lùng và luôn trong trạng thái khan hiếm hàng. Thiết kế của những mẫu hoodie của Supreme cũng đều là những họa tiết và hình vẽ đơn giản, mang hơi hướng, liên quan đến môn thể thao trượt ván, logo của thương hiệu. Chất liệu chủ yếu làm bằng vải nỉ. Tuy nhiên, chiếc hoodie đắt hàng nhất phải kể đến việc kết hợp cùng Louis Vuitton tạo nên cơn sốt vô cùng lớn với mức giá cả lên tới cả trăm triệu đô.
                                                    </h3>
                                                </div> 
                                            </div>

                                            <div>
                                                <div style="font-style: normal;color: #747474;text-transform: uppercase;font-size: 16px;margin: 10px 0px 10px 10px;">
                                                    3. Quần Supreme
                                                </div>
                                                <div>
                                                    <img src="source/image/news/blog3.png" alt="" style="width:100%;">
                                                </div>
                                                <div style="font-weight: 600;">
                                                    <h3 style="font-size: 15px;">
                                                        Các mẫu quần của Supreme lại đánh vào 2 tiêu chí: sự thoải mái và độ bền, chủ yếu nhắm tới đối tượng là tín đồ hiphop và rock. Chúng được làm từ chất liệu có độ co giãn tốt, dễ dàng tham gia hoạt động nhưng lại vẫn đảm bảo độ bền, không dễ rách hay sờn. Thiết kế đơn giản, bo ở chân, với những đường kẻ sọc khỏe khoắn và hình logo được in dọc theo thân quần, vô cùng nổi bật và hiện đại.
                                                    </h3>
                                                </div> 
                                            </div>

                                            <div>
                                                <div style="font-style: normal;color: #747474;text-transform: uppercase;font-size: 16px;margin: 10px 0px 10px 10px;">
                                                    4. Túi đeo chéo Supreme
                                                </div>
                                                <div>
                                                    <img src="source/image/news/blog4.png" alt="" style="width:100%;">
                                                </div>
                                                <div style="font-weight: 600;">
                                                    <h3 style="font-size: 15px;">
                                                       Những năm gần đây, túi đeo chéo Supreme trở thành phụ kiện “hot” nhất. Các thiết kế mang hơi hướng unisex, vô cùng trẻ trung năng động, phù hợp cho cả nam và nữ. 
                                                    </h3>
                                                </div> 
                                            </div>

                                            <div>
                                                <div style="font-style: normal;color: #747474;text-transform: uppercase;font-size: 16px;margin: 10px 0px 10px 10px;">
                                                    5. Giày Supreme
                                                </div>
                                                <div>
                                                    <img src="source/image/news/blog5.png" alt="" style="width:100%;">
                                                </div>
                                                <div style="font-weight: 600;">
                                                    <h3 style="font-size: 15px;">
                                                        Giày Supreme kết hợp cùng Nike: Nike Air More Uptempo, chính là mẫu sneaker được săn đón nhất với thiết kế tương hầm hố, chất liệu da màu trắng với tên logo cực lớn màu đỏ in trên thân giày. Trên đây là những thông tin chi tiết nhất về thương hiệu đình đám Supreme. Nếu bạn ưa chuộng phong cách thời trang đường phố cool ngầu, tối giản nhưng vẫn vô cùng độc đáo thì hãy tậu ngay cho mình một sản phẩm của Supreme. Và dù gì đi nữa, đây vẫn là thương hiệu đứng đầu thế giới về mức độ lan tỏa cũng như tính đại chúng.
                                                    </h3>
                                                </div> 
                                            </div>
                                        </p>
                                    </div>
                                    <div class="post_meta">
                                        <span><a href="#">1 bình luận</a></span>
                                        <span> / Thẻ: </span>
                                        <span><a href="#"> Đặng Ngọc Toàn</a></span>
                                    </div>
                                    <div class="social_sharing">
                                        <h3>Chia sẻ bài đăng này</h3>
                                        <ul>
                                            <li><a href="https://vi-vn.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="author_box">
                                        <div class="author_img">
                                            <img src="source/image/news/cmt_ad.jpg" alt="">
                                        </div>
                                        <div class="author_desc">
                                            <h3>Tác giả: <a href="#">Đặng Ngọc Toàn</a></h3>
                                            <p>
                                                Tìm hiểu 1 chút về thương hiệu Supreme :))
                                            </p>
                                        </div>
                                    </div> 
                               </div>
                            </div>  
                           <div class="comments_box">
                                <h3>Bình luận </h3>
                                @foreach($blognew as $bnew)
                                <div class="comment_list">
                                    <div class="comment-author-thumb">
                                        <!-- <img src="source/image/news/comment.jpg" alt=""> -->
                                        <img src="source/image/news/cmt_ad.jpg" alt="">
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_meta">
                                            <div class="comment_title">
                                                <h5><a href="#">{{$bnew->full_name}}</a></h5>
                                                <span>{{$bnew->email}}</span>
                                            </div>  
                                        </div>
                                        <p>
                                            {{$bnew->note}}
                                        </p>
                                        <div class="comment_reply">
                                            <a href="#">Trả lời</a>
                                        </div>
                                    </div>     
                                </div>
                                @endforeach
                                <!-- <div class="comment_list">
                                    <div class="comment-author-thumb">
                                        <img src="source/image/news/cmt_ad.jpg" alt="">
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_meta">
                                            <div class="comment_title">
                                                <h5><a href="#">Admin</a></h5>
                                                <span>August 16, 2021 at 1:50 pm</span>
                                            </div>
                                        </div>
                                        <p>
                                            Shop cảm ơn bạn đã tin dùng và ủng hộ Shop.
                                        </p>
                                        <div class="comment_reply">
                                            <a href="#">Trả lời</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment_list">
                                    <div class="comment-author-thumb">
                                        <img src="source/image/news/cmt_ad.jpg" alt="">
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_meta">
                                            <div class="comment_title">
                                                <h5><a href="#">Admin</a></h5>
                                                <span>August 16, 2021 at 1:50 pm</span>
                                            </div>
                                        </div>
                                        <p>
                                            Sắp tới ben Shop sẽ có 1 lô giày Adidas mới cùng với nhiều loại mã giảm giá khác nhau cho từng sản phẩm, Shop mong bạn sẽ ghé qua ủng hộ các sản phẩn của Shop .
                                        </p>
                                        <div class="comment_reply">
                                            <a href="#">Trả lời</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="comments_form">
                                <h3>Nhập bình luận của bạn</h3>
                                <p>Địa chỉ Email của bạn sẽ được công khai tại đây.</p>

                                <form action="{{route('tintuc')}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="review_comment">Nội dung: </label>
                                            <textarea  id="review_comment" name="comment"></textarea>
                                        </div> 
                                        <div class="col-lg-4 col-md-4">
                                            <label for="author">Tên bạn</label>
                                            <input id="author"  type="text" name="name">
                                        </div> 
                                        <div class="col-lg-4 col-md-4">
                                            <label for="email">Emai bạn</label>
                                            <input id="email"  type="text" name="email">
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label for="website">Số điện thoại</label>
                                            <input id="website"  type="text" name="phone">
                                        </div>   
                                    </div>
                                    <button class="button" type="submit">Đăng bình luận</button>
                                </form>    
                            </div>

                           <div class="related_posts">
                               <h3>Bài đăng gần đây</h3>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_related_posts">
                                            <div class="related_posts_thumb">
                                                <img src="source/image/news/post1.png" alt="">
                                            </div>
                                            <div class="related_posts_content">
                                               <h3><a href="#">Adidas – “ông trùm” thống thị trên thế giớiNếu kể tên hãng giày thể thao nổi tiếng thế giới thì chắc chắn hơn 90% người ta sẽ nhắc đến ...</a></h3>
                                               <span>September30, 2021</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_related_posts">
                                            <div class="related_posts_thumb">
                                                <img src="source/image/news/post2.png" alt="">
                                            </div>
                                            <div class="related_posts_content">
                                               <h3><a href="#">Nike - quả thực là một thiếu sót rất lớn nếu chỉ nhắc đến Adidas mà không nhắc đến tên Nike, bởi hai thương hiệu này thường rất cạnh tranh nhau. Thương ...</a></h3>
                                               <span>September 30, 2021</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_related_posts column_3">
                                            <div class="related_posts_thumb">
                                                <img src="source/image/news/post3.png" alt="">
                                            </div>
                                            <div class="related_posts_content">
                                               <h3><a href="#">Giày Supreme – thương hiệu giày Sneaker xa xỉ Supreme được biết đến là một trong những thương hiệu xa xỉ nhất thế giới, bởi giá của những ...</a></h3>
                                               <span>September 30, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>  
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection