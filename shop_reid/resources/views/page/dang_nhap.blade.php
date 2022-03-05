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
                            <li>Đăng nhập</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>

    <div class="customer_login">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <img src="source/image/login/shop1.jpg" alt="" style="width:100%;height:27em;">
                     </div>    
                </div>

                <div class="col-lg-6 col-md-6">
                    @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
                    <div class="account_form">
                        <h2>Đăng nhập</h2>
                        <form action="{{route('dangnhap')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <p>   
                                <label>Tên địa chỉ Email của bạn<span> *</span></label>
                                <input type="text" name="email" placeholder="Nhập địa chỉ Email của bạn">
                             </p>
                             <p>   
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="password" placeholder="Nhập mật khẩu của bạn">
                             </p>   
                            <div class="login_submit">
                                <a href="#" style="margin-right: 12px;">Quên mật khẩu?</a>
                                <a href="{{route('dangki')}}">Thêm tài khoản mới</a>
                                <label for="remember">
                                    <input name="remember" type="checkbox">
                                        Ghi nhớ đăng nhập
                                </label>
                                <button type="submit">Đăng nhập</button>
                            </div>

                        </form>
                     </div>    
                </div>
            </div>
        </div>    
    </div>
@endsection

