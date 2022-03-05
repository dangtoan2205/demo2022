@extends('admin.master')
@section('admin.content')

<div class="right_col" role="main">
    <div class="">
        <div class="row" style="display: block;">
        	<div class="col-md-12 col-sm-12  ">
        		<div class="login_wrapper" style="margin-top: 0px">
			        <div class="animate form login_form">
			          <section class="login_content">
			            <form>
			              <h1>Đăng nhập</h1>
			              <div>
			                <input type="text" class="form-control" placeholder="Tài khoản" required="" />
			              </div>
			              <div>
			                <input type="password" class="form-control" placeholder="Mật khẩu" required="" />
			              </div>
			              <div>
			                <a class="btn btn-default submit dangnhap" href="">Đăng nhập</a>
			                <a class="reset_pass" href="">Quên mật khẩu?</a>
			              </div>

			              <div class="clearfix"></div>

			              <div class="separator">
			                <p class="change_link">Chưa có tài khoản?
			                  <a href="{{route('addangki')}}" class="to_register"> Tạo tài khoản mới </a>
			                </p>

			                <div class="clearfix"></div>
			                <br />

			                <div>
			                	<h1><i class="fa fa-paw"></i> Shop Reid!</h1>
			                </div>
			              </div>
			            </form>
			          </section>
			        </div>
      			</div>
        	</div>
        </div>
    </div>
</div>

<style>
	.dangnhap{
		border: 1px solid;
	}
	.dangnhap:hover{
		color: #ff8100;
	}
</style>
@endsection