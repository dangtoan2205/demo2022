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
			              <h1>Đăng kí tài khoản</h1>
			              <div>
			                <input type="text" class="form-control" placeholder="Tên tài khoản" required="" />
			              </div>
			              <div>
			                <input type="email" class="form-control" placeholder="Email" required="" />
			              </div>
			              <div>
			                <input type="password" class="form-control" placeholder="Mật khẩu" required="" />
			              </div>
			              <div>
			                <a class="btn btn-default submit dangki" href="">Đăng kí</a>
			              </div>

			              <div class="clearfix"></div>

			              <div class="separator">
			                <p class="change_link">Đã có tài khoản?
			                  <a href="{{route('addangnhap')}}" class="to_register"> Đăng nhập ngay </a>
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
	.dangki{
		border: 1px solid;
		display: initial;
	}
	.dangki:hover{
		color: #ff8100;
	}
</style>
@endsection