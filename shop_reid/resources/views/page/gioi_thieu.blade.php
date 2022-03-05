@extends('master')
@section('content')
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>/</li>
                            <li>Giới thiệu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>

    <div class="about_section">
        <div class="container">  
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about_content">
                        <h1>Chào mừng tới Cửa hàng Reid!</h1>
                        <p> 
                        	Chúng tôi cam kết hàng thật, nhập khẩu 100%
                        </p>
                        <p>
                        	Thương hiệu đẳng cấp thế giới
                        </p>
                        <div class="view__work">
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb">
                        <img src="source/image/about/about1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>     
    </div>

    <div class="counterup_section">
        <div class="container">   
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup">
                       <div class="counter_img">
                            <img src="source/image/about/count.png" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">3170</h2>
                            <p>Số người truy cập</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup count-two">
                        <div class="counter_img">
                            <img src="source/image/about/count2.png" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">10262</h2>
                            <p>Doanh số bán năm 2020</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup">
                        <div class="counter_img">
                            <img src="source/image/about/count3.png" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">123</h2>
                            <p>Số giờ làm</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup count-two">
                        <div class="counter_img">
                            <img src="source/image/about/count4.png" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">9247</h2>
                            <p>Số người thích</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <div class="about_progressbar">
        <div class="container">   
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="progressbar_inner">
                       <h2>Biểu đồ tiêu thụ sản phẩm năm 2020</h2>
                        <div class="progress_skill one">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <span class="progress_persent">Quý 1</span>    
                                </div>
                            </div>
                            <span class="progress_discount">60%</span>
                        </div>
                        <div class="progress_skill two">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".5s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">Quý 2</span>
                                </div>

                            </div>
                             <span class="progress_discount">90%</span>
                        </div> 
                        <div class="progress_skill three">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">Quý 3</span>
                                </div>

                            </div>
                             <span class="progress_discount">70%</span>
                        </div> 
                         <div class="progress_skill four">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">Quý 4</span>
                                </div>

                            </div>
                             <span class="progress_discount">80%</span>
                        </div> 
                    </div>           
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__img">
                        <img src="source/image/about/about2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>    
    </div>
@endsection