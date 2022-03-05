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
                            <li>Đăng kí</li>
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
                        <img src="source/image/login/shop2.jpg" alt="" style="width:100%;height:52.5em;">
                     </div>    
                </div>

                <div class="col-lg-6 col-md-6">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('thanhcong'))
                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif
                    <div class="account_form register">
                        <h2>Đăng kí</h2>
                        <form action="{{route('dangki')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <p>   
                                <label>Email<span> *</span></label>
                                <input type="text" name="email" placeholder="Nhập địa chỉ Email của bạn">
                            </p>
                            <p>   
                                <label>Họ và tên<span> *</span></label>
                                <input type="text" name="fullname" placeholder="Nhập họ và tên của bạn">
                            </p>
                            <p>   
                                <label>Địa chỉ<span> *</span></label>
                                <input type="text" name="address" placeholder="Nhập địa chỉ của bạn">
                            </p>
                            <p>   
                                <label>Số điện thoại<span> *</span></label>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại của bạn">
                            </p>
                            <p>   
                                <label>Mật khẩu<span> *</span></label>
                                <input type="password" name="password" placeholder="Nhập mật khẩu của bạn">
                            </p>
                            <p>   
                                <label>Mật lại khẩu<span> *</span></label>
                                <input type="password" name="re_password" placeholder="Nhập lại mật khẩu của bạn">
                            </p>
                            <div class="login_submit">
                                <a href="{{route('dangnhap')}}">Bạn đã có tài khoản</a>
                                <button type="submit">Đăng kí</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
            </div>
        </div>    
    </div>
@endsection
